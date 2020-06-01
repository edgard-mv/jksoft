<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{

   /* public function salarios() {
		return $this->hasOne('App\Salario','id');
    }*/

    protected $table = 'trabajadores';
}
