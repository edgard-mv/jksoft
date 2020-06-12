<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venta;

class VentasController extends Controller
{
    public function getAll() {
        $ventas = Venta::with('productos')->get();

        return view('ventas.venta', compact('ventas'));
    }
}
