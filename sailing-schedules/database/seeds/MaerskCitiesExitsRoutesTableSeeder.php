<?php

use Illuminate\Database\Seeder;

class MaerskCitiesExitsRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('maersk_cities_exits_routes')->delete();
        
        \DB::table('maersk_cities_exits_routes')->insert(array (
            0 => 
            array (
                'id' => 1264,
                'OriginPortCode' => '2IW9P6J7XAW72',
                'DestinationPortCode' => '1DTLY5QWBK7MH',
                'created_at' => '2019-01-17 12:53:34',
                'updated_at' => '2019-01-17 12:53:34',
            ),
            1 => 
            array (
                'id' => 1265,
                'OriginPortCode' => '2IW9P6J7XAW72',
                'DestinationPortCode' => '0XOD2B72XPY5F',
                'created_at' => '2019-01-17 12:53:41',
                'updated_at' => '2019-01-17 12:53:41',
            ),
            2 => 
            array (
                'id' => 1266,
                'OriginPortCode' => '2IW9P6J7XAW72',
                'DestinationPortCode' => '1M1FXJYL1M3CL',
                'created_at' => '2019-01-17 12:53:45',
                'updated_at' => '2019-01-17 12:53:45',
            ),
            3 => 
            array (
                'id' => 1267,
                'OriginPortCode' => '2IW9P6J7XAW72',
                'DestinationPortCode' => '365FKA3IH3WH6',
                'created_at' => '2019-01-17 12:53:51',
                'updated_at' => '2019-01-17 12:53:51',
            ),
            4 => 
            array (
                'id' => 1268,
                'OriginPortCode' => '2CBOYMUSVJHJT',
                'DestinationPortCode' => '1DTLY5QWBK7MH',
                'created_at' => '2019-01-17 12:53:58',
                'updated_at' => '2019-01-17 12:53:58',
            ),
            5 => 
            array (
                'id' => 1269,
                'OriginPortCode' => '2CBOYMUSVJHJT',
                'DestinationPortCode' => '0XOD2B72XPY5F',
                'created_at' => '2019-01-17 12:54:05',
                'updated_at' => '2019-01-17 12:54:05',
            ),
            6 => 
            array (
                'id' => 1270,
                'OriginPortCode' => '2CBOYMUSVJHJT',
                'DestinationPortCode' => '1M1FXJYL1M3CL',
                'created_at' => '2019-01-17 12:54:12',
                'updated_at' => '2019-01-17 12:54:12',
            ),
            7 => 
            array (
                'id' => 1271,
                'OriginPortCode' => '2CBOYMUSVJHJT',
                'DestinationPortCode' => '2IW9P6J7XAW72',
                'created_at' => '2019-01-17 12:54:19',
                'updated_at' => '2019-01-17 12:54:19',
            ),
            8 => 
            array (
                'id' => 1272,
                'OriginPortCode' => '2CBOYMUSVJHJT',
                'DestinationPortCode' => '365FKA3IH3WH6',
                'created_at' => '2019-01-17 12:54:21',
                'updated_at' => '2019-01-17 12:54:21',
            ),
        ));
        
        
    }
}