<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Carbon\Carbon;
use App\CoscoRoute;
use App\ContadorJob;
use App\Credentialapi;
use App\Events\FinApi;
use GuzzleHttp\Client;
use App\CoscoRoutesExist;
use App\CoscoTransferVessel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CoscoRoutesExistJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $arreglos,$idcj;
    protected $insertSubRt;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($arreglos,$idcj)
    {
        $this->arreglos      = $arreglos;
        $this->idcj          = $idcj;
        $this->insertSubRt   = '';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $arreglos = $this->arreglos;
        // $insertSubRt=''; //id de refrencia para almacenar los transbordos o detalles de los transabordos

        $client = new Client([
            'headers' => ['Content-Type'=>'application/json','Accept'=>'*/*'],
        ]);

        foreach($arreglos as $arreglo){ 
            $origenfull     = $arreglo['OriginPortCode'];
            $destinyfull    = $arreglo['DestinationPortCode'];
            usleep(300000);
            $reponse = $client->request('POST','http://elines.coscoshipping.com/ebschedule/public/purpoSehipment',[
                'json' => [
                    'delivery' =>	'B',
                    //'destinationCity' =>	'Valparaiso, ,Valparaiso,Chile,CLVAL',
                    'destinationCity'   =>	$destinyfull,
                    'estimateDate'      =>	'D',
                    'fromDate'          =>	Carbon::now()->toDateString(),
                    //'originCity' =>	'Shanghai,Shanghai,Shanghai,China,CNSHA',
                    'originCity'        =>	$origenfull,
                    'pickup'            =>	'B',
                    'toDate'            =>	Carbon::now()->addMonth()->toDateString(),
                ],
            ]);

            $data= json_decode($reponse->getBody()->getContents(),true);
            if(empty($data['data']['content']['data']) != true){

                $idinsert = '';
                foreach($data['data']['content']['data'] as $ruta){
                    usleep(300000);
                    if(empty($ruta['id']) != true ){
                        $numTransb = 0; //representa el numero de transbordo

                        $RouteDetailExist = CoscoRoute::where('OriginPortCode','=',$ruta['pol'])
                            ->where('DestinationPortCode','=',$ruta['pod'])
                            ->where('Etd','=',$ruta['etd'])
                            ->where('Eta','=',$ruta['available'])
                            ->where('Vessel','=',$ruta['vesselCode'])
                            ->where('VesselName','=',$ruta['vessel'])
                            ->get();

                        //almacena la nueva ruta
                        // $insertSubRt contendra el id de la inserccion al almacenar una nueva ruta
                        if(count($RouteDetailExist) == 0){

                            $fecha1     =  Carbon::parse($ruta['etd']);
                            $fecha2     =  Carbon::parse($ruta['available']);
                            $transitime = $fecha1->diffInDays($fecha2);

                            $idinsert = DB::table('cosco_routes')->insertGetId([
                                'OriginPortCode'        => $ruta['pol'],
                                'DestinationPortCode'   => $ruta['pod'],
                                'Etd'                   => $ruta['etd'],
                                'Eta'                   => $ruta['available'],
                                'Vessel'                => $ruta['vesselCode'],
                                'VesselName'            => $ruta['vessel'],
                                'Carrier'               => 'Cosco',
                                'Transitime'            => $transitime,
                                'Transfer'              => 0
                            ]);
                            //$this->insertSubRt = $idinsert;
                            //dd($this->insertSubRt .' | '. $idinsert);
                            usleep(100000);

                            CoscoTransferVessel::create([
                                'OriginPortName'        => $ruta['pol'],
                                'DestinationPortName'   => $ruta['pod'],
                                'Etd'                   => $ruta['etd'],
                                'Eta'                   => $ruta['available'],
                                'Vessel'                => $ruta['vesselCode'],
                                'VesselName'            => $ruta['vessel'],
                                'cosco_route_id'        => $idinsert
                            ]);
                        } else {
                            foreach($RouteDetailExist as $RouteDetailData){
                                //$this->insertSubRt = $RouteDetailData['id'];
                                $idinsert = $RouteDetailData['id'];
                                break;
                            }
                        }

                    }  else{
                        // contendra el id de la ultima inserccion de ruta
                        //carga un adicional de Sub-Ruta

                        $RouteDetailTransferExist = CoscoTransferVessel::where('OriginPortName','=',$ruta['pol'])
                            ->where('DestinationPortName','=',$ruta['pod'])
                            ->where('Etd','=',$ruta['etd'])
                            ->where('Eta','=',$ruta['available'])
                            ->where('Vessel','=',$ruta['vesselCode'])
                            ->where('VesselName','=',$ruta['vessel'])
                            ->get();

                        if(count($RouteDetailTransferExist) == 0){

                            CoscoTransferVessel::create([
                                'OriginPortName'        => $ruta['pol'],
                                'DestinationPortName'   => $ruta['pod'],
                                'Etd'                   => $ruta['etd'],
                                'Eta'                   => $ruta['available'],
                                'Vessel'                => $ruta['vesselCode'],
                                'VesselName'            => $ruta['vessel'],
                                'cosco_route_id'        => $idinsert
                            ]);

                            $fecha1     =  Carbon::parse($ruta['etd']);
                            $fecha2     =  Carbon::parse($ruta['available']);
                            $transitime = $fecha1->diffInDays($fecha2);

                            $numTransb++;
                            DB::table('cosco_routes')
                                ->where('id', $idinsert)
                                ->update([
                                    'DestinationPortCode'   => $ruta['pod'],
                                    'Eta'                   => $ruta['available'],
                                    'Transitime'            => $transitime,
                                    'Transfer'              => $numTransb
                                ]);
                            //Actualiza numero de Transbordo, la ruta final y fecha final en la primera ruta  que se almaceno
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
            $credential = Credentialapi::find(2);
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
