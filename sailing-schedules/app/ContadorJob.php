<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContadorJob extends Model
{
   protected $table = 'contador_jobs';
   protected $fillable = [
      'name',
      'total',
      'actual',
      'ejecucion'
   ];
}
