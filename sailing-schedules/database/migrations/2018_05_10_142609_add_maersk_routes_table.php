<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaerskRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maersk_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OriginPortCode');
            $table->string('DestinationPortCode');
            $table->date('Etd');
            $table->date('Eta');
            $table->string('Vessel');
            $table->string('VesselName');
            $table->string('Carrier');
            $table->integer('Transitime')->default(0);
            $table->integer('Transfer')->default(0);
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
        Schema::dropIfExists('maersk_routes');
    }
}
