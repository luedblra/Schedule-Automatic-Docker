<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use App\Jobs\MaerksRoutesexistingJob;
use App\MaersCitiesExitsRoute;
use App\ContadorJob;

class MaerskChunkRouteExistJob implements ShouldQueue
{
   use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

   /**
     * Create a new job instance.
     *
     * @return void
     */
   public function __construct()
   {
      //
   }

   /**
     * Execute the job.
     *
     * @return void
     */
   public function handle()
   {
      
      DB::table('maersk_routes')->delete();
      $rutas  = MaersCitiesExitsRoute::all(); 
      $chunks = $rutas->chunk(45);
      $multiArreglos =$chunks->toArray();
            
      $idcj = ContadorJob::create([
         'name'      => 'MaerskChunkRouteExistJob',
         'total'     => count($multiArreglos),
         'actual'    => 0,
         'ejecucion' => true
      ]);

      $idcj = $idcj->id;
      
      foreach($multiArreglos as $arreglos){
         MaerksRoutesexistingJob::dispatch($arreglos,$idcj);
      }
   }
}
