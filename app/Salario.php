<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salario extends Model
{
    use SoftDeletes;
   /* public function trabajadores() {
		return $this->hasOne('App\Trabajador','id');
    }*/
    
   protected $table = 'salarios';
}
