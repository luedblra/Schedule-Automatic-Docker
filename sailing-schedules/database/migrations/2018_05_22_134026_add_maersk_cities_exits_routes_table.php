<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaerskCitiesExitsRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maersk_cities_exits_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OriginPortCode');
            $table->string('DestinationPortCode');
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
        Schema::dropIfExists('maersk_cities_exits_routes');
    }
}
