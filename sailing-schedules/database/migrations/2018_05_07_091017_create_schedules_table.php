<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maritime_line'); /*LINEA MARITIMA*/
            $table->string('service_type'); /*TIPO DE SERVICIO (DIRECTO O CON TRANSBORDO)*/
            $table->string('vessel'); /*NOMBRE DEL BARCO*/
            $table->string('voyage'); /*NUMERO DE VIAJE DEL BARCO*/
            $table->string('origin_port'); /*PUERTO DE ORIGIN*/
            $table->string('destination_port'); /*PUERTO DE DESTINO*/
            $table->date('etd'); /*FECHA Y HORA DE SALIDA*/
            $table->date('eta'); /*FECHA Y HORA DE LLEGADA*/
            $table->string('transit_time'); /*TIEMPO DE VIAJE*/
            $table->date('cutoff'); /*FECHA DE ENTREGA DE MERCADERIA ANTES DE SALIDA*/
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
        Schema::dropIfExists('schedules');
    }
}
