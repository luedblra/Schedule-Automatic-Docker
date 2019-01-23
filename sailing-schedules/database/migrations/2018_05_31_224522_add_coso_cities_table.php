<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCosoCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cosco_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cityName');
            $table->string('country');
            $table->string('code')->nullable();
            $table->string('cityCode');
            $table->string('fullFormate');
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
        Schema::dropIfExists('cosco_cities');
    }
}
