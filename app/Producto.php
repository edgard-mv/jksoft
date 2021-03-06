<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    use SoftDeletes;

    public function proveedores() {
        return $this->belongsToMany('App\Proveedor', 'proveedor_producto')
                        ->withPivot('cantidad', 'fecha');
    }
    
    public function ventas() {
        return $this->belongsToMany('App\Venta', 'producto_venta')
                        ->withPivot('cantidad_producto', 'monto');
    }

    public function pedidos() {
        return $this->belongsToMany('App\Pedido', 'producto_pedido')
                        ->withPivot('cantidad_producto', 'fecha');
    }
}
