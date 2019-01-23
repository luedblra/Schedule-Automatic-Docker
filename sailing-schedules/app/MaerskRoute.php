<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaerskRoute extends Model
{
    protected $table = 'maersk_routes';
    protected $fillable = ['OriginPortCode','DestinationPortCode','Etd','Eta','Vessel','VesselName','Carrier'
,'Transitime','Transfer'];
    
    protected $hidden = ['created_at','updated_at','id'];
    
    public function MaerskTransferVessels(){
        return $this->hasMany('App\MaerskTransferVessel');
    }
   
   public function carrier(){
        return $this->belongsTo('App\Carrier','carrier_id');
    }
}
