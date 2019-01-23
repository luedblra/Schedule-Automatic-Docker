<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaerskTransferVesselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maersk_transfer_vessels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OriginPortName');
            $table->string('DestinationPortName');
            $table->date('Etd');
            $table->date('Eta');
            $table->string('Vessel')->nullable();
            $table->string('VesselName')->nullable();
            $table->integer('maersk_route_id')->unsigned();
            $table->foreign('maersk_route_id')->references('id')->on('maersk_routes')->onDelete('cascade');
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
        Schema::dropIfExists('maersk_transfer_vessels');
    }
}
