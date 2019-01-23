<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use GuzzleHttp\Client;
use App\GeonodeCity;
use App\CoscoCountry;
use App\MaerskContry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class CoscoCountriesJob implements ShouldQueue
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
        // Aqui va el foreach que consulta la tabla de geonode para sacar los prefijos de las ciudades
        // DB::table('cosco_contries')->delete();
        Redis::throttle('forge_api_countries')->allow(1)->every(2)->then(function () {

            $Geonodecities = GeonodeCity::all();

            $client = new Client([
                'base_uri' => 'http://elines.coscoshipping.com/ebbase/public/general/',
            ]);


            foreach($Geonodecities as $Geonodecity){

                $reponse = $client->request('GET','findCityByPrefix?prefix='.$Geonodecity['cityName']);
                $data= json_decode($reponse->getBody()->getContents(),true);

                foreach($data['data']['content'] as $cities){
                    //echo  $citie['cityEnglishName'].'<br>';
                    $existe = CoscoCountry::where('name','=',$cities['country'])->count();
                    if($existe <= 0){

                        $country = MaerskContry::where('name','=',$cities['country'])->first();
                        if(empty($country)){
                            $code = '';
                        }
                        else{
                            $code = $country['countryCode'];
                        }

                        DB::table('cosco_contries')->insertGetId([
                            'name'       => $cities['country'],
                            'code'       => $code,
                        ]);
                    }
                }
            }
        }, function () {
            // Could not obtain lock; this job will be re-queued
            return $this->release(2);
        });
    }
}
