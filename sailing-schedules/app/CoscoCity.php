<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoscoCity extends Model
{
    protected $table = 'cosco_cities';
    protected $fillable = ['cityName',
                           'country',
                           'code',
                           'cityCode',
                           'fullFormate',
                          ];

    protected $hidden = ['created_at','updated_at','id'];
    
        public function scopeSearch($query,$data)
    {
        return $query->where('cityName','LIKE',"%$data%")->orWhere('country','LIKE',"%$data%")->orWhere('code','LIKE',"%$data%")->orWhere('fullFormate','LIKE',"%$data%");    
    }
}
