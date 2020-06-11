<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use SoftDeletes;

    public function productos() {
		return $this->belongsToMany('App\Producto', 'proveedor_producto');
	}

    protected $table = 'proveedores';
}
