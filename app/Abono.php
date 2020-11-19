<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abono extends Model
{
    use SoftDeletes;

    public function venta() {
        return $this->belongsTo('App\Credito');
    }

    protected $fillable = ['cantidad', 'fecha', 'comentarios'];
}
