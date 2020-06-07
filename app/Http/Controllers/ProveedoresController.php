<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor;
use DB;

class ProveedoresController extends Controller
{
    public function getAll() {
        //$proveedores = Proveedor::all();
        $proveedores = DB::select('CALL spProveedores_GetAll()');

        return view('proveedores.proveedor', compact('proveedores'));
    }

    public function search(Request $request) {
        if ($request->isMethod('get') and $request->input('valor') and $request->input('tipo')) {
            $value = $request->input('valor');
            $type = $request->input('tipo');

            if ($type == 'id') {
                $proveedores = Proveedor::find($value);
                if (!$proveedores) {
                    $proveedores = collect([]);
                } else {
                    $proveedores = collect([$proveedores]);
                }
            } elseif ($type == 'empresa') {
                $proveedores = Proveedor::where('empresa', 'like', '%'. $value .'%')->get();
            } elseif ($type == 'nombre') {
                $proveedores = Proveedor::where('nombre', 'like', '%'. $value .'%')->get();
            }

            return view('proveedores.proveedor', compact('proveedores'));
        }

        return redirect()->route('proveedores');
    }

    public function create(Request $request) {
        if ($request->isMethod('put')) {
            if ($request->input('nombre') and $request->input('empresa')) {
                $proveedor = new Proveedor;
                $proveedor->nombre = $request->input('nombre');
                $proveedor->empresa = $request->input('empresa');
                $proveedor->save();
            }
            return redirect()->route('proveedores');
        }

        return view('proveedores.nuevo_proveedor');
    }

    public function update(Request $request, $id) {
        $proveedor = Proveedor::find($id);

        if ($request->isMethod('patch')) {
            if ($request->input('nombre')) {
                $proveedor->nombre = $request->input('nombre');
            }
            if ($request->input('empresa')) {
                $proveedor->empresa = $request->input('empresa');
            }
            $proveedor->save();
            return redirect()->route('proveedores');
        }

        return view('proveedores.editar_proveedor', compact('proveedor'));
    }
}
