<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoscoCountry extends Model
{
    protected $table = 'cosco_contries';
    protected $fillable = ['name',                           
                           'code',
                          ];

    protected $hidden = ['created_at','updated_at','id'];
    
            public function scopeSearch($query,$data)
    {
        return $query->where('name','LIKE',"%$data%")->orWhere('code','LIKE',"%$data%");    
    }
}
