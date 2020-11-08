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

    protected $table ='pedidos';

}
