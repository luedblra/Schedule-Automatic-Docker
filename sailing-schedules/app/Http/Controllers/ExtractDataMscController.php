<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\MscPort;
use App\Jobs\MscPortJob;
use Illuminate\Support\Facades\DB;

class ExtractDataMscController extends Controller
{
    public function ExtracContriesMsc(){

        MscPortJob::dispatch();
        return 'Listo';
    }


    public function test(){

        $client = new Client([
            'headers' => ['Content-Type'=>'application/json','Accept'=>'*/*'],
        ]);

        $reponse = $client->request('POST','http://elines.coscoshipping.comhttps://www.msc.com/CMSTemplates/CraftedCMS/WebServices/RouteFinder.svc/Routes5566227ebschedule/public/purpoSehipment',[
            'json' => [
                'delivery' =>	'B',
                'destinationCity' =>	'Valparaiso, ,Valparaiso,Chile,CLVAL',
                'destinationCityUuid' =>	'738872886232619',
                'estimateDate' =>	'D',
                'fromDate' =>	'2018-05-31',
                'originCity' =>	'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'originCityUuid' =>	'738872886232873',
                'pickup' =>	'B',
                'toDate' =>	'2018-08-27',
            ],
        ]);

        return $data= json_decode($reponse->getBody()->getContents(),true);

    }
}
