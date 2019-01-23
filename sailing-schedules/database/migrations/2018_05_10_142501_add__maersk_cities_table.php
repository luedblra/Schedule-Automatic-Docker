<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaerskCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maersk_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('geoId');
            $table->string('cityName');
            $table->string('code')->nullable();
            $table->string('countryName');
            $table->string('countryCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maersk_cities');
    }
}
