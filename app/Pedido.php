<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;

    public function trabajador() {
        return $this->belongsTo('App\Trabajador');
    }

    public function producto_pedido() {
        return $this->hasMany('App\ProductoPedido');
    }

    public function productos() {
        return $this->belongsTo('App\Producto');
    }


    protected $table ='pedidos';

}
