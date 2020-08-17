<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor;
use DB;

class ProveedoresController extends Controller
{
    public function getAll() {
        
        $proveedores = Proveedor::paginate(15);

        return view('proveedores.proveedor', compact('proveedores'));
    }

    public function search(Request $request) {
        if ($request->isMethod('get') and $request->input('valor') and $request->input('tipo')) {
            $value = $request->input('valor');
            $type = $request->input('tipo');

            if ($type == 'id') {
                $proveedores = Proveedor::find($value);
                if (!$proveedores) {
                    $proveedores = collect([])->paginate(15);
                } else {
                    $proveedores = collect([$proveedores])->paginate(15);
                }
            } elseif ($type == 'empresa') {
                $proveedores = Proveedor::where('empresa', 'like', '%'. $value .'%')->paginate(15);
            } elseif ($type == 'nombre') {
                $proveedores = Proveedor::where('nombre', 'like', '%'. $value .'%')->paginate(15);
            }

            return view('proveedores.proveedor', compact('proveedores'));
        }

        return redirect()->route('proveedor.todos');
    }

    public function create(Request $request) {
        if ($request->isMethod('put')) {
            if ($request->input('nombre') and $request->input('empresa')) {
                $proveedor = new Proveedor;
                $proveedor->nombre = $request->input('nombre');
                $proveedor->empresa = $request->input('empresa');
                $proveedor->save();
            }
            return redirect()->route('proveedor.todos');
        }

        return view('proveedores.nuevo_proveedor');
    }

    public function delete($id) {
        $proveedor = Proveedor::find($id);
        
        $proveedor->productos()->each(function ($producto) {
            if ($producto->proveedores()->count() == 1) {
                $producto->delete();
            }
        });


        $proveedor->delete();

        return redirect()->route('proveedor.todos');    
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
            return redirect()->route('proveedor.todos');
        }

        return view('proveedores.editar_proveedor', compact('proveedor'));
    }
}
