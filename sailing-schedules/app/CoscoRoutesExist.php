<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoscoRoutesExist extends Model
{
    protected $table = 'cosco_routes_exist';
    protected $fillable = ['OriginPortCode','DestinationPortCode'];
    protected $hidden = ['created_at','updated_at','id'];
}
