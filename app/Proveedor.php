<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function productos() {
		return $this->belongsToMany('App\Producto', 'proveedor_producto');
	}

    protected $table = 'proveedores';
}
