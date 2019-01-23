<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Carbon\Carbon;
use App\MaerskCity;
use App\MaerskRoute;
use App\ContadorJob;
use App\Events\FinApi;
use GuzzleHttp\Client;
use App\Credentialapi;
use App\MaerskTransferVessel;
use App\MaersCitiesExitsRoute;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class MaerksForCitiesJob implements ShouldQueue
{
   use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
   protected $id,$arreglos,$idcj;
   /**
     * Create a new job instance.
     *
     * @return void
     */
   public function __construct($id,$arreglos,$idcj)
   {
      $this->id         = $id;
      $this->arreglos   = $arreglos;
      $this->idcj       = $idcj;
   }

   /**
     * Execute the job.
     *
     * @return void
     */
   public function handle()
   {

      $MaerskCityFrom = MaerskCity::find($this->id);

      $client = new Client([
         'base_uri' => 'https://api.maerskline.com/maeu/products/',
      ]);

      foreach($this->arreglos as $MaerskCityTo){
         usleep(200000);
         $reponse = $client->request('GET','futureschedules?from='.$MaerskCityFrom->geoId.'&to='.$MaerskCityTo['geoId']);

         $data= json_decode($reponse->getBody()->getContents(),true);

         if(empty($data['products']) != true ){

            $cantidad = MaersCitiesExitsRoute::where('OriginPortCode','=',$MaerskCityFrom->geoId)->where('DestinationPortCode','=',$MaerskCityTo['geoId'])->count();

            // Para almacenar la ruta destino origen para futuras busquedas
            if($cantidad <= 0){
               MaersCitiesExitsRoute::create([
                  'OriginPortCode'        => $MaerskCityFrom->geoId,
                  'DestinationPortCode'   => $MaerskCityTo['geoId'],
               ]);
            }

            //Se verifica si el destino tiene nombre en nuestra base de datos, en caso contrario se coloca el codigo

            if(empty($MaerskCityFrom->cityName)){
               $CityFrom = $MaerskCityFrom->geoId;
            }
            else{
               $CityFrom = $MaerskCityFrom->cityName;
            }

            if(empty($MaerskCityTo['cityName'])){
               $Cityto = $MaerskCityTo['geoId'];
            }
            else{
               $Cityto = $MaerskCityTo['cityName'];
            }

            foreach($data['products'] as $schedules){
               foreach($schedules['schedules'] as $schedule){
                  $exiteInBD = '';
                  $exiteInBD =  MaerskRoute::where('OriginPortCode','=',$CityFrom)
                     ->where('DestinationPortCode','=',$Cityto)
                     ->where('Etd','=',$schedule['fromLocation']['date'])
                     ->where('Eta','=',$schedule['toLocation']['date'])
                     ->where('Vessel','=',$schedule['vessel']['code'])
                     ->where('VesselName','=',$schedule['vessel']['name'])
                     ->get();

                  if(count($exiteInBD) == 0){

                     $fecha1     =  Carbon::parse($schedule['fromLocation']['date']);
                     $fecha2     =  Carbon::parse($schedule['toLocation']['date']);
                     $transitime = $fecha1->diffInDays($fecha2);

                     $id = MaerskRoute::create([
                        'OriginPortCode'        =>   $CityFrom,
                        'DestinationPortCode'   =>   $Cityto,
                        'Etd'                   =>   $schedule['fromLocation']['date'],
                        'Eta'                   =>   $schedule['toLocation']['date'],
                        'Vessel'                =>   $schedule['vessel']['code'],
                        'VesselName'            =>   $schedule['vessel']['name'],
                        'Carrier'            =>   'Maersk',
                        'Transitime'            =>   $transitime,
                     ]);
                     $id = $id->id;
                     $i=0;
                     foreach($schedule['scheduleDetails'] as $scheduleDetails){
                        $OriginPort       = '';
                        $DestinationPort  = '';
                        $client2 = new Client([
                           'base_uri' => 'https://api.maerskline.com/maeu/locations/details/',
                        ]);
                        usleep(200000);
                        if(empty($scheduleDetails['fromLocation']['siteGeoId']) != true){
                           $reponse2 = $client2->request('GET', $scheduleDetails['fromLocation']['siteGeoId']);
                           $data2= json_decode($reponse2->getBody()->getContents(),true);
                           $OriginPort = $data2['countryName'].' \ '.$data2['cityName'];
                        } else {
                           $OriginPort = $scheduleDetails['fromLocation']['siteGeoId'];
                        }

                        if(empty($scheduleDetails['toLocation']['siteGeoId']) != true){
                           $reponse3 = $client2->request('GET', $scheduleDetails['toLocation']['siteGeoId']);
                           $data3= json_decode($reponse3->getBody()->getContents(),true);
                           $DestinationPort = $data3['countryName'].' \ '.$data3['cityName'];
                        } else {
                           $DestinationPort = $scheduleDetails['toLocation']['siteGeoId'];
                        }

                        MaerskTransferVessel::create([
                           'OriginPortName'        =>   $OriginPort,
                           'DestinationPortName'   =>   $DestinationPort,
                           'Etd'                   =>   $scheduleDetails['fromLocation']['date'],
                           'Eta'                   =>   $scheduleDetails['toLocation']['date'],
                           'Vessel'                =>   $scheduleDetails['transport']['vessel']['code'],
                           'VesselName'            =>   $scheduleDetails['transport']['vessel']['name'],
                           'maersk_route_id'       =>   $id
                        ]);
                        $i++;
                     }

                     if($i > 0){
                        $ruta = MaerskRoute::find($id);
                        $ruta->Transfer = $i;
                        $ruta->save();
                     }
                  }
               }
            }
         }
      }

      $contadorJob = ContadorJob::find($this->idcj);
      $total   = $contadorJob->total;
      $actual  = $contadorJob->actual;
      $actual  = $actual + 1;
      $contadorJob->actual = $actual;

      if($total == $actual){
         $credential = Credentialapi::find(1);
         $data = [
            'auth_post'       => $credential['auth_post'],
            'client_id'       => $credential['client_id'],
            'client_secret'   => $credential['client_secret'],
            'user_name'       => $credential['user_name'],
            'password'        => $credential['password'],
            'url_get'         => $credential['url'],
         ];
         event(new FinApi($data));
         $contadorJob->ejecucion = false;
         $contadorJob->delete();
      } else {
         $contadorJob->update();
      }
   }
}
