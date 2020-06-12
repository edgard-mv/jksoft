<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoVenta extends Model
{
    use SoftDeletes;

    protected $table = 'producto_venta';
}
