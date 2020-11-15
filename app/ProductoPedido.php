<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoPedido extends Model
{
    use SoftDeletes;

    protected $table = 'producto_pedido';
}
