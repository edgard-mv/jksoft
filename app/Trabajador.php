<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trabajador extends Model
{
  use SoftDeletes;
   /* public function salarios() {
		return $this->hasOne('App\Salario','id');
    }*/

    protected $table = 'trabajadores';
}
