<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MscPort extends Model
{
        protected $table = 'msc_ports';
        protected $filltable = [
                'CountryIsoCode',
                'CountryName',
                'LocationCode',
                'LocationLatitude',
                'LocationLongitude',
                'LocationName',
                'PortId',        
        ];
        protected $hidden = ['created_at','updated_at','id','PortId'];
}
