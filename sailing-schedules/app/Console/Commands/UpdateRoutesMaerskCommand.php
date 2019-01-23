<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use App\CoscoRoutesExist;
use App\MaersCitiesExitsRoute;
use App\Jobs\CoscoRoutesExistJob;
use App\Jobs\MaerskChunkRouteExistJob;


class UpdateRoutesMaerskCommand extends Command
{
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
   protected $signature = 'UpdateRouteMaersk:command';

   /**
     * The console command description.
     *
     * @var string
     */
   protected $description = 'Elimina y Carga las nuevas rutas Maerks';

   /**
     * Create a new command instance.
     *
     * @return void
     */
   public function __construct()
   {
      parent::__construct();
   }

   /**
     * Execute the console command.
     *
     * @return mixed
     */
   public function handle()
   {

      MaerskChunkRouteExistJob::dispatch();

      
      DB::table('cosco_routes')->delete();
      $rutas  = CoscoRoutesExist::all(); 
      $chunks = $rutas->chunk(45);
      $multiArreglos =$chunks->toArray();
      foreach($multiArreglos as $arreglos){
         CoscoRoutesExistJob::dispatch($arreglos);
      }
   }
}
