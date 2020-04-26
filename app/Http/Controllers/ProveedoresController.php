<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor;

class ProveedoresController extends Controller
{
    public function getAll() {
        $proveedores = Proveedor::all();

        return view('proveedores.proveedor', compact('proveedores'));
    }
}
