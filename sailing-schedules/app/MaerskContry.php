<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaerskContry extends Model
{
    protected $table = 'maersk_countries';
    protected $fillable = ['countryCode','geoId','name'];
    
    public function scopeSearch($query,$data)
    {
        return $query->where('name','LIKE',"%$data%")->orWhere('countryCode','LIKE',"%$data%")->orWhere('geoId','LIKE',"%$data%");    
    }
}


