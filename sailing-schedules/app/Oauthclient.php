<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oauthclient extends Model
{
   protected $table = 'oauth_clients';
   protected $fillable = [
      'name',
      'secret',
      'password_client'
   ];
}
