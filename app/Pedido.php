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

    public function productos() {
        return $this->belongsToMany('App\Producto', 'producto_pedido')
                        ->withPivot('cantidad_producto', 'fecha','precio_compra');
    }

    public function proveedores() {
        return $this->belongsToMany('App\Proveedor', 'proveedor_producto')
                        ->withPivot('cantidad', 'fecha');
    }

    protected $fillable = ['cantidad_total', 'monto_total', 'estado'];

    protected $table ='pedidos';

}
