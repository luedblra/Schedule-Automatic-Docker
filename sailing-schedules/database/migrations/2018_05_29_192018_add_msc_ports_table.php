<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMscPortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msc_ports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CountryIsoCode');
            $table->string('CountryName');
            $table->string('LocationCode');
            $table->string('LocationLatitude');
            $table->string('LocationLongitude');
            $table->string('LocationName');
            $table->integer('PortId');
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
        Schema::dropIfExists('msc_ports');
    }
}
