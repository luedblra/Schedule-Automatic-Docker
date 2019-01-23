<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaersCitiesExitsRoute extends Model
{
    protected $table = 'maersk_cities_exits_routes';
    protected $fillable = ['OriginPortCode','DestinationPortCode'];
}
