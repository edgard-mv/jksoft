<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contado extends Model
{
    use SoftDeletes;

    public function venta() {
        return $this->belongsTo('App\Venta');
    }

    protected $fillable = ['monto'];
}
