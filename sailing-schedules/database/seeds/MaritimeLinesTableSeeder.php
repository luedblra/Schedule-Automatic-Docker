<?php

use Illuminate\Database\Seeder;

class MaritimeLinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('maritime_lines')->delete();

        \DB::table('maritime_lines')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'APL',
                    'code' => 'APL',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'CCNI',
                    'code' => 'CCNI',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'CMA CGM',
                    'code' => 'CMA CGM',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'COSCO',
                    'code' => 'COSCO',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'CSAV',
                    'code' => 'CSAV',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Evergreen',
                    'code' => 'Evergreen',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Hamburg Sud',
                    'code' => 'HAMBURG SUD',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Hanjin',
                    'code' => 'Hanjin',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Hapag Lloyd',
                    'code' => 'Hapag Lloyd',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'HMM',
                    'code' => 'HMM',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'K Line',
                    'code' => 'K Line',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Maersk',
                    'code' => 'Maersk',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'MOL',
                    'code' => 'MOL',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'MSC',
                    'code' => 'MSC',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'NYK Line',
                    'code' => 'NYK Line',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'OOCL',
                    'code' => 'OOCL',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'PIL',
                    'code' => 'PIL',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Safmarine',
                    'code' => 'Safmarine',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'UASC',
                    'code' => 'UASC',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Wan Hai Lines',
                    'code' => 'WHL',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'YML',
                    'code' => 'YML',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'ZIM',
                    'code' => 'ZIM',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Otros',
                    'code' => 'OT',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}