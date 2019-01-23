<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Schedules Personal Access Client',
                'secret' => '2azTByv6SDJEVizmgnYKQq1W8zSxS49YnU9yA6TH',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2019-01-17 18:49:49',
                'updated_at' => '2019-01-17 18:49:49',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Schedules Password Grant Client',
                'secret' => '4A8kVmi5V8U9wawEHTcrF4AWMf7sRxpUFVvkWrPE',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2019-01-17 18:49:49',
                'updated_at' => '2019-01-17 18:49:49',
            ),
        ));
        
        
    }
}