<?php

use Illuminate\Database\Seeder;

class CoscoRoutesExistTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cosco_routes_exist')->delete();
        
        \DB::table('cosco_routes_exist')->insert(array (
            0 => 
            array (
                'id' => 1,
                'OriginPortCode' => 'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'DestinationPortCode' => 'San Antonio, ,Valparaiso,Chile,CLSAN',
                'created_at' => '2019-01-22 14:52:43',
                'updated_at' => '2019-01-22 14:52:43',
            ),
            1 => 
            array (
                'id' => 2,
                'OriginPortCode' => 'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'DestinationPortCode' => 'Valparaiso, ,Valparaiso,Chile,CLVAL',
                'created_at' => '2019-01-22 14:52:46',
                'updated_at' => '2019-01-22 14:52:46',
            ),
            2 => 
            array (
                'id' => 3,
                'OriginPortCode' => 'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'DestinationPortCode' => 'Luanda, , ,Angola,AOLUA',
                'created_at' => '2019-01-22 14:52:49',
                'updated_at' => '2019-01-22 14:52:49',
            ),
            3 => 
            array (
                'id' => 4,
                'OriginPortCode' => 'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'DestinationPortCode' => 'Buenos Aires, ,Buenos Aires,Argentina,ARBNA',
                'created_at' => '2019-01-22 15:45:46',
                'updated_at' => '2019-01-22 15:45:46',
            ),
            4 => 
            array (
                'id' => 5,
                'OriginPortCode' => 'Shanghai,Shanghai,Shanghai,China,CNSHA',
                'DestinationPortCode' => 'Las Palmas, ,Buenos Aires,Argentina,ARLSP',
                'created_at' => '2019-01-22 15:45:48',
                'updated_at' => '2019-01-22 15:45:48',
            ),
        ));
        
        
    }
}