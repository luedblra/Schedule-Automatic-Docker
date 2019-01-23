<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\MaerskCity;
use App\ContadorJob;
use App\MaerskRoute;
use App\MaerskContry;
use App\Credentialapi;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\MaerskTransferVessel;
use App\MaersCitiesExitsRoute;
use App\Jobs\MaerksOneToOneJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Jobs\MaerskChunkRouteExistJob;
use App\Jobs\MaerksProccessToProccessJob;

use App\Events\FinApi;

class ExtractDataMaersk extends Controller
{

    // Vita Begin ---------------------------------------------------------------
    public function index(){

        $MaerskCity    =  MaerskCity::all()->pluck('countryName','id')->unique();
        return view('Maerks.OneToOne',compact('MaerskCity'));
    }

    public function LoadPort($selector,$country){
        $countries = explode(',',$country);
        $collectCountries = collect([]);
        foreach ($countries as $country) {
            $countriesObj   =  MaerskCity::find($country);
            $collectCountries->push($countriesObj->countryName);
        }
        $country ='';
        if($selector == 1){
            $MaerskPorts    =  MaerskCity::all()->whereIn('countryName',$collectCountries)->pluck('cityName','id');
            return view('Maerks.BodysLoad.SelectFromPort',compact('MaerskPorts'));
        } else if($selector == 2){
            $MaerskPorts    =  MaerskCity::all()->whereIn('countryName',$collectCountries)->pluck('cityName','id');
            return view('Maerks.BodysLoad.SelectToPort',compact('MaerskPorts'));
        }
    }

    public function cities(Request $request){
        $MaerskCities = MaerskCity::search($request->search)->paginate(10);
        return view('Maerks.index',compact('MaerskCities'));
    }

    public function EditCity($id){
        $contries = MaerskContry::all();
        $MaerskCity = MaerskCity::find($id);
        return view('Maerks.BodysLoad.cities',compact('MaerskCity','contries'));
        dd($MaerskCity);
    }
    // Viesta End ----------------------------------------------------------------


    // begin New backend ---------------------------------------------------------

    public function MaerksNewRoutes(Request $request){
        $requestArreglo = $request->all();
        $fromPorts = $requestArreglo['fromPort'];
        $ToPorts   = $requestArreglo['ToPort'];
        $countJobs = count($fromPorts) * count($ToPorts);

        $idcj = ContadorJob::create([
            'name'      => 'MaerksOneToOneJob',
            'total'     => $countJobs,
            'actual'    => 0,
            'ejecucion' => true
        ]);

        $idcj = $idcj->id;

        foreach($fromPorts as $from){
            foreach($ToPorts as $To){
                MaerksOneToOneJob::dispatch($from,$To,$idcj);
            }
        }
        return redirect()->route('home')->with('success','Solicitud en proceso. MAERSK');
    }

    public function RoutesExistChunk(){
        MaerskChunkRouteExistJob::dispatch();
        return redirect()->route('home')->with('success','Solicitud de actialización en proceso. MAERSK');
    }

    public function MaerksForCites(Request $request){
        $cities = MaerskCity::search($request->search)->paginate(10);
        return view('Maerks.cities',compact('cities'));
    }

    public function update(Request $request,$id){
        $city = MaerskCity::find($id);
        $city->geoId        = $request->geoId;
        $city->cityName     = $request->cityName;
        $city->code         = $request->code;
        $city->countryName  = $request->countryName;
        $city->countryCode  = $request->countryCode;
        $city->update();
        return redirect()->route('list.cities.maersk')->with('success','Actualización con exito. MAERSK');
    }

    public function delete($id){
        $city = MaerskCity::find($id);
        if(count($city) ==0){
            return 2;
        }
        $city->delete();
        return 1;
    }

    public function MaerksCitySelect($id){
        MaerksProccessToProccessJob::dispatch($id);
        return redirect()->route('home')->with('success','Solicitud de actialización en proceso. MAERSK');
    }

    // End New backend -----------------------------------------------------------

    public function test(){

    }
    public function forceApiNotification(){

        $credential = Credentialapi::find(1);
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

    // carga las referencias de las ciudades -------------------------------------

    public function LoadForReferens(){

        $client = new Client([
            'base_uri' => 'https://geonode.wfp.org/geoserver/',
        ]);


        $reponse = $client->request('GET','wfs?srsName=EPSG%3A4326&typename=geonode%3Awld_trs_ports_wfp&outputFormat=json&version=1.0.0&service=WFS&request=GetFeature');
        $data= json_decode($reponse->getBody()->getContents(),true);

        foreach($data['features'] as $features){


            if($features['properties']['code'] == null){
                //   echo null;
            }
            else{
                echo $features['properties']['portname'].'<br>';

                DB::table('maersk_cities')
                    ->where('cityName', $features['properties']['portname'])
                    ->update(['code' =>$features['properties']['code']]);

            }
        }

    }


}
