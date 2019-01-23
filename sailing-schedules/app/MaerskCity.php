<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaerskCity extends Model
{
    protected $table = 'maersk_cities';
    protected $fillable = ['geoId','cityName','code','countryName','countryCode'];
    
    public function scopeSearch($query,$data)
    {
        return $query->where('cityName','LIKE',"%$data%")->orWhere('countryCode','LIKE',"%$data%")->orWhere('countryName','LIKE',"%$data%")->orWhere('geoId','LIKE',"%$data%");    
    }
}
