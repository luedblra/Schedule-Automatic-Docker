<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

use App\ContadorJob;
use App\CoscoRoutesExist;
use App\Jobs\CoscoRoutesExistJob;

class CoscoChunkRouteExistJob implements ShouldQueue
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
        DB::table('cosco_routes')->delete();
        $rutas  = CoscoRoutesExist::all(); 
        $chunks = $rutas->chunk(50);//50
        $multiArreglos =$chunks->toArray();

        $idcj = ContadorJob::create([
            'name'      => 'CoscoChunkRouteExistJob',
            'total'     => count($multiArreglos),
            'actual'    => 0,
            'ejecucion' => true
        ]);

        $idcj = $idcj->id;
        foreach($multiArreglos as $arreglos){
            CoscoRoutesExistJob::dispatch($arreglos,$idcj);
        }
    }
}
