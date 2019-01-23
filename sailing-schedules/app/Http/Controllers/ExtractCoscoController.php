<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\CoscoCity;

use App\CoscoRoute;
use App\GeonodeCity;
use App\ContadorJob;
use App\CoscoCountry;
use App\Events\FinApi;
use App\Credentialapi;
use GuzzleHttp\Client;
use App\CoscoRoutesExist;
use App\CoscoTransferVessel;
use Illuminate\Http\Request;
use App\Jobs\CoscoCitiesJob;
use App\Jobs\CoscoOneToOnejob;
use App\Jobs\CoscoCountriesJob;
use App\Jobs\CoscoRoutesExistJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Jobs\CoscoRoutesForCitiesJob;
use App\Jobs\CoscoChunkRouteExistJob;
use App\Jobs\CoscoRoutesForCountryJob;
use App\Jobs\CoscoProcessToProcessJob;

class ExtractCoscoController extends Controller
{
    public function index(Request $request){
        $CosoCity    =  CoscoCity::all()->pluck('country','id')->unique();
        return view('Cosco.OneToOne',compact('CosoCity'));
    }

    public function LoadPortCosco($selector,$country){
        $countries = explode(',',$country);
        $collectCountries = collect([]);
        foreach ($countries as $country) {
            $countriesObj   =  CoscoCity::find($country);
            $collectCountries->push($countriesObj->country);
        }
        $country ='';
        if($selector == 1){
            $CoscoPorts    =  CoscoCity::all()->whereIn('country',$collectCountries)->pluck('fullFormate','id')->unique();
            return view('Cosco.BodysLoad.SelectFromPort',compact('CoscoPorts'));
        } else if($selector == 2){
            $CoscoPorts    =  CoscoCity::all()->whereIn('country',$collectCountries)->pluck('fullFormate','id')->unique();
            return view('Cosco.BodysLoad.SelectToPort',compact('CoscoPorts'));
        }
    }

    public function CoscoNewRoutes(Request $request){
        $requestArreglo = $request->all();
        $fromPorts = $requestArreglo['fromPort'];
        $ToPorts   = $requestArreglo['ToPort'];

        $countJobs = count($fromPorts) * count($ToPorts);

        $idcj = ContadorJob::create([
            'name'      => 'CoscoOneToOneJob',
            'total'     => $countJobs,
            'actual'    => 0,
            'ejecucion' => true
        ]);

        $idcj = $idcj->id;

        foreach($fromPorts as $from){
            foreach($ToPorts as $To){
                CoscoOneToOnejob::dispatch($from,$To,$idcj);
            }
        }
        return redirect()->route('home')->with('success','Solicitud en proceso. COSCO');
    }

    public function Cities(Request $request){
        $cities = CoscoCity::search($request->search)->orderBy('cityName','asc')->paginate(7);
        return view('Cosco.cities',compact('cities'));
    }

    public function ExtractCities(){
        CoscoCitiesJob::dispatch();
        return 'listo';
    }


    public function ExtractRoutesForCity($id){
        CoscoProcessToProcessJob::dispatch($id);
        return redirect()->route('home')->with('success','Solicitud en proceso. COSCO');
    }

    public function UpdateRoutes(){

        CoscoChunkRouteExistJob::dispatch();
        return redirect()->route('home')->with('success','Solicitud de actialización en proceso. COSCO');
    }

    public function citieslist(Request $request){
        $CoscoCities = CoscoCity::search($request->search)->orderBy('cityName','asc')->paginate(10);
        return view('Cosco.index',compact('CoscoCities'));
    }

    public function EditCity($id){
        $contries = CoscoCountry::all();
        $CoscoCity = CoscoCity::find($id);
        return view('Cosco.BodysLoad.cities',compact('CoscoCity','contries'));
    }

    public function update(Request $request,$id){
        $city = CoscoCity::find($id);
        $city->cityName     = $request->cityName;
        $city->country      = $request->country;
        $city->code         = $request->code;
        $city->cityCode     = $request->cityCode;
        $city->fullFormate  = $request->fullFormate;
        $city->update();
        return redirect()->route('list.cities.cosco')->with('success','City actualizada con exito. COSCO');
    }

    public function delete($id){
        $city = CoscoCity::find($id);
        if(count($city) ==0){
            return 2;
        }
        $city->delete();
        return 1;
    }

    public function ExtractContries(){
        CoscoCountriesJob::dispatch();
        return 'listo';
    }


    public function forceApiNotification(){

        $credential = Credentialapi::find(2);
        $data = [
            'auth_post'       => $credential['auth_post'],
            'client_id'       => $credential['client_id'],
            'client_secret'   => $credential['client_secret'],
            'user_name'       => $credential['user_name'],
            'password'        => $credential['password'],
            'url_get'         => $credential['url'],
        ];
        echo  json_encode(event(new FinApi($data)));
    }


    public function test(){
        $client = new Client([
            'headers' => ['Content-Type'=>'application/json','Accept'=>'*/*'],
        ]);
        //foreach($citiesTo as $cityTo){ 
        usleep(300000);
        $reponse = $client->request('POST','http://elines.coscoshipping.com/ebschedule/public/purpoSehipment',[
            'json' => [
                'delivery' =>	'B',
                'destinationCity' =>	'Alexandria, ,Al Iskandariyah,Egypt,EGALE',
                //'destinationCity'   =>	$cityTo['fullFormate'].','.$cityTo['code'],

                'estimateDate'      =>	'D',
                'fromDate'          =>	Carbon::now()->toDateString(),
                'originCity' =>	'Shanghai,Shanghai,Shanghai,China,CNSHA',
                //'originCity'        =>	$cityFrom['fullFormate'].','.$cityFrom['code'],

                'pickup'            =>	'B',
                'toDate'            =>	Carbon::now()->addMonth()->toDateString(),

            ],
        ]);
        $data= json_decode($reponse->getBody()->getContents(),true);
        if(empty($data['data']['content']['data']) != true){


            /*$origin     = $cityFrom['fullFormate'].','.$cityFrom['code'];
            $destiny    = $cityTo['fullFormate'].','.$cityTo['code'];

            $RouteExist = CoscoRoutesExist::where('OriginPortCode','=',$origin)
                ->where('DestinationPortCode','=',$destiny)
                ->get();

            if(count($RouteExist) == 0){
                CoscoRoutesExist::create([
                    'OriginPortCode'        => $origin,
                    'DestinationPortCode'   => $destiny,
                ]);
            }*/

            $insertSubRt = ''; //id de refrencia para almacenar los transbordos o detalles de los transabordos
            foreach($data['data']['content']['data'] as $ruta){
                if(empty($ruta['id'])){

                    // contendra el id de la ultima inserccion de ruta
                    //carga un adicional de Sub-Ruta
                    log::info($insertSubRt.' ...Ciclo 2.1');

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
                            'cosco_route_id'        => $insertSubRt,
                        ]);

                        $numTransb++;
                        DB::table('cosco_routes')
                            ->where('id', $insertSubRt)
                            ->update([
                                'DestinationPortCode'   => $ruta['pod'],
                                'Eta'                   => $ruta['available'],
                                'Transfer'              => $numTransb,
                            ]);
                        //Actualiza numero de Transbordo, la ruta final y fecha final en la primera ruta  que se almaceno
                    }

                }  else{


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


                        $insertSubRt = DB::table('cosco_routes')->insertGetId([
                            'OriginPortCode'        => $ruta['pol'],
                            'DestinationPortCode'   => $ruta['pod'],
                            'Etd'                   => $ruta['etd'],
                            'Eta'                   => $ruta['available'],
                            'Vessel'                => $ruta['vesselCode'],
                            'VesselName'            => $ruta['vessel'],
                            'Transfer'              => 0,
                        ]);

                        log::info($insertSubRt.' ...Ciclo 1');

                        CoscoTransferVessel::create([
                            'OriginPortName'        => $ruta['pol'],
                            'DestinationPortName'   => $ruta['pod'],
                            'Etd'                   => $ruta['etd'],
                            'Eta'                   => $ruta['available'],
                            'Vessel'                => $ruta['vesselCode'],
                            'VesselName'            => $ruta['vessel'],
                            'cosco_route_id'        => $insertSubRt,
                        ]);
                    }

                }
            }
        }
        //} // cierre de foreach 

    }
}
