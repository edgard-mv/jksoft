<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    
   /* public function trabajadores() {
		return $this->hasOne('App\Trabajador','id');
    }*/
    
   protected $table = 'salarios';
}
