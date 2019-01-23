<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContadorJobsTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
   {
      Schema::create('contador_jobs', function (Blueprint $table) {
         $table->increments('id');
         $table->string('name');
         $table->integer('total');
         $table->integer('actual');
         $table->boolean('ejecucion')->default(true);
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
      Schema::dropIfExists('contador_jobs');
   }
}
