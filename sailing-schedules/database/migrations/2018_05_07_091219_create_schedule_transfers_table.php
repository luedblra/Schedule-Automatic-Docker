<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('schedule_id'); /*SCHEDULE VINCULADO*/
            $table->string('vessel'); /*NOMBRE DEL BARCO*/
            $table->string('voyage'); /*NUMERO DE VIAJE DEL BARCO*/
            $table->string('origin_port'); /*PUERTO DE ORIGIN*/
            $table->string('destination_port'); /*PUERTO DE DESTINO*/
            $table->date('etd'); /*FECHA Y HORA DE SALIDA*/
            $table->date('eta'); /*FECHA Y HORA DE LLEGADA*/
            $table->string('transit_time'); /*TIEMPO DE VIAJE*/
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
        Schema::dropIfExists('schedule_transfers');
    }
}
