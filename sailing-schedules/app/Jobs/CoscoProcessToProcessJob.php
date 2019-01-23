<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Jobs\CoscoRoutesForCitiesJob;
use App\CoscoCity;

class CoscoProcessToProcessJob implements ShouldQueue
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
        $this->id  = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $cities = CoscoCity::all(); 
        $chunks = $cities->chunk(80);
        $multiArreglos =$chunks->toArray();

        $idcj = ContadorJob::create([
            'name'      => 'CoscoProcessToProcessJob',
            'total'     => count($multiArreglos),
            'actual'    => 0,
            'ejecucion' => true
        ]);

        $idcj = $idcj->id;

        foreach($multiArreglos as $arreglos){
            CoscoRoutesForCitiesJob::dispatch($this->id,$arreglos,$idcj);
        }
    }
}
