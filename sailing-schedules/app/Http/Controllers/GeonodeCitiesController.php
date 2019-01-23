<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\GeonodeCity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class GeonodeCitiesController extends Controller
{
    public function ExtractGeoCities(){
        
         DB::table('geonode_cities')->delete();
        
        $client = new Client([
            'base_uri' => 'https://geonode.wfp.org/geoserver/',
        ]);

        $reponse = $client->request('GET','wfs?srsName=EPSG%3A4326&typename=geonode%3Awld_trs_ports_wfp&outputFormat=json&version=1.0.0&service=WFS&request=GetFeature');
        $data= json_decode($reponse->getBody()->getContents(),true);

        foreach($data['features'] as $city){

            if(empty($city['properties']['portname'])){
                //no hace nada
            }
            else{
                DB::table('geonode_cities')->insertGetId([
                    'cityName'   => $city['properties']['portname'],
                    'code'       => $city['properties']['code'],
                    'country'    => $city['properties']['country'],
                ]);
            }
        }


    }
}
