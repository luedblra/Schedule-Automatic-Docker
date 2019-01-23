<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoscoTransferVessel extends Model
{
    protected $table = 'cosco_transfer_vessels';
    protected $fillable = ['OriginPortName',
                           'DestinationPortName',
                           'Etd',
                           'Eta',
                           'Vessel',
                           'VesselName',
                           'cosco_route_id',
                          ];

    protected $hidden = ['created_at','updated_at','id'];


    public function CoscoRoute(){
        return $this->belongsTo('App\CoscoRoute');
    }
}
