<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeonodeCity extends Model
{
        protected $table = 'geonode_cities';
    protected $fillable = ['cityName',
                           'code',
                           'country',
                          ];

    protected $hidden = ['created_at','updated_at','id'];
}
