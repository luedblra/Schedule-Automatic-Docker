<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
     * Seed the application's database.
     *
     * @return void
     */
   public function run()
   {
      $this->call(UsersSeeder::class);
      $this->call(MaerskContriesSeeder::class);
      $this->call(CountriesTableSeeder::class);
      $this->call(HarborsTableSeeder::class);
      $this->call(PortsTableSeeder::class);
      $this->call(CarriersTableSeeder::class);
      $this->call(MaritimeLinesTableSeeder::class);

      $this->call(MscPortsTableSeeder::class);
      $this->call(MaerskCitiesTableSeeder::class);
      $this->call(GeonodeCitiesTableSeeder::class);
      $this->call(CoscoCitiesTableSeeder::class);
      $this->call(CoscoContriesTableSeeder::class);
      $this->call(MaerskCitiesExitsRoutesTableSeeder::class);
       $this->call(OauthClientsTableSeeder::class);
        $this->call(CredentialsApiTableSeeder::class);
        $this->call(CoscoRoutesExistTableSeeder::class);
    }
}
