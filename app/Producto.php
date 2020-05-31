<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function proveedores() {
		return $this->belongsToMany('App\Proveedor', 'proveedor_producto');
	}
}
