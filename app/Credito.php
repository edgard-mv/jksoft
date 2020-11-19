<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credito extends Model
{
    use SoftDeletes;

    public function abonos() {
        return $this->hasMany('App\Abono');
    }

    protected $fillable = ['cliente', 'monto', 'fecha_de_pago'];
}
