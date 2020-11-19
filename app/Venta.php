<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use SoftDeletes;

    public function productos() {
        return $this->belongsToMany('App\Producto', 'producto_venta')
                        ->withPivot('cantidad_producto', 'monto', 'precio_actual');
    }

    public function contado() {
        return $this->hasOne('App\Contado');
    }

    public function credito() {
        return $this->hasOne('App\Credito');
    }
}
