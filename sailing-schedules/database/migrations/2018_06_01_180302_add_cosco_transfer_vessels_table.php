<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoscoTransferVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosco_transfer_vessels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OriginPortName');
            $table->string('DestinationPortName');
            $table->string('Etd');
            $table->string('Eta')->nullable();
            $table->string('Vessel'); /// code
            $table->string('VesselName');
            $table->integer('cosco_route_id')->unsigned();
            $table->foreign('cosco_route_id')->references('id')->on('cosco_routes')->onDelete('cascade');
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
        Schema::dropIfExists('cosco_transfer_vessels');
    }
}
