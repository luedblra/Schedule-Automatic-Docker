<?php

use Illuminate\Database\Seeder;

class CredentialsApiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('credentials_api')->delete();
        
        \DB::table('credentials_api')->insert(array (
            0 => 
            array (
                'id' => 1,
                'auth_post' => 'http://smanual/',
                'client_id' => '1',
                'client_secret' => 'MrGWuViDv1r8LI8ETzceRHTfpC48Nn7hm4GeAIBA',
                'user_name' => 'info@cargofive.com',
                'password' => 'secret',
                'url' => 'api/NotificacionApi/1',
                'carrier_id' => 12,
                'description' => 'Login Smanual Maersk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'auth_post' => 'http://smanual/',
                'client_id' => '1',
                'client_secret' => 'MrGWuViDv1r8LI8ETzceRHTfpC48Nn7hm4GeAIBA',
                'user_name' => 'info@cargofive.com',
                'password' => 'secret',
                'url' => 'api/NotificacionApi/2',
                'carrier_id' => 4,
                'description' => 'Login Smanual Cosco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}