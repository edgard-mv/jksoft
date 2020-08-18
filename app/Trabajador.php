<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trabajador extends Model
{
    use SoftDeletes;

    public function salarios() {
		return $this->hasMany('App\Salario');
    }

    protected $table = 'trabajadores';
}
