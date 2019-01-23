<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoscoRoute extends Model
{
    protected $table = 'cosco_routes';
    protected $fillable = ['OriginPortCode',
                           'DestinationPortCode',
                           'Etd',
                           'Eta',
                           'Vessel',
                           'VesselName',
                           'Transfer',
                          ];

    protected $hidden = ['created_at','updated_at','id'];
    
    public function CoscoTransferVessels(){
        return $this->hasMany('App\CoscoTransferVessel');
    }
}
