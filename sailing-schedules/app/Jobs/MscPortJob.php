<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use GuzzleHttp\Client;
use App\MscPort;
use Illuminate\Support\Facades\DB;

class MscPortJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
                $client = new Client([
            'base_uri' => 'https://www.msc.com/CMSTemplates/CraftedCMS/WebServices/RouteFinder.svc/',
        ]);

        $reponse = $client->request('GET','Ports');
        $data= json_decode($reponse->getBody()->getContents(),true);

        foreach($data as $port){

            $id = DB::table('msc_ports')->insertGetId([
                'CountryIsoCode'    =>     $port['CountryIsoCode'],
                'CountryName'       =>     $port['CountryName'],
                'LocationCode'      =>     $port['LocationCode'],
                'LocationLatitude'  =>     $port['LocationLatitude'],
                'LocationLongitude' =>     $port['LocationLongitude'],
                'LocationName'      =>     $port['LocationName'],
                'PortId'            =>     $port['PortId']
            ]);
        }
    }
}
