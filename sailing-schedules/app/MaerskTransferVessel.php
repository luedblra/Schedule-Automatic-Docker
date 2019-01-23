<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaerskTransferVessel extends Model
{
     protected $table = 'maersk_transfer_vessels';
    protected $fillable = ['OriginPortName',
                           'DestinationPortName',
                           'Etd',
                           'Eta',
                           'Vessel',
                           'VesselName',
                           'maersk_route_id',
                          ];
    
    protected $hidden = ['created_at','updated_at','id'];
    
    public function MaerskRoute(){
        return $this->belongsTo('App\MaerskRoute');
    }
}
