<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use App\MaerskCity;
use App\ContadorJob;
use App\Jobs\MaerksForCitiesJob;
use Illuminate\Support\Facades\Redis;

class MaerksProccessToProccessJob implements ShouldQueue
{
   use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
   protected $id;
   /**
     * Create a new job instance.
     *
     * @return void
     */
   public function __construct($id)
   {
      $this->id = $id;
   }

   /**
     * Execute the job.
     *
     * @return void
     */
   public function handle()
   {

      $cities = MaerskCity::all(); 
      $chunks = $cities->chunk(80);
      $multiArreglos =$chunks->toArray();

      $idcj = ContadorJob::create([
         'name'      => 'MaerksRoutesexistingJob',
         'total'     => count($multiArreglos),
         'actual'    => 0,
         'ejecucion' => true
      ]);

      $idcj = $idcj->id;

      foreach($multiArreglos as $arreglos){
         MaerksForCitiesJob::dispatch($this->id,$arreglos,$idcj);
      }
   }
}
