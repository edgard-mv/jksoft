<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor;
use Illuminate\Support\Facades\Gate;
use App\Services\ProveedorService;
use DB;

class ProveedoresController extends Controller
{
    public function getAll() {
        if (Gate::denies('access-providers')) {
            return redirect(url()->previous());
        }
        
        $proveedores = ProveedorService::getAll();

        return view('proveedores.proveedor', compact('proveedores'));
    }

    public function search(Request $request) {
        if (Gate::denies('access-providers')) {
            return redirect(url()->previous());
        }
        
        if ($request->isMethod('get') and $request->input('valor') and $request->input('tipo')) {
            $value = $request->input('valor');
            $type = $request->input('tipo');

            $proveedores = search($value, $type);

            return view('proveedores.proveedor', compact('proveedores'));
        }

        return redirect()->route('proveedor.todos');
    }

    public function create(Request $request) {
        if (Gate::denies('access-providers')) {
            return redirect(url()->previous());
        }
        
        if ($request->isMethod('put')) {
            if ($request->input('nombre') and $request->input('empresa')) {
                ProveedorService::createOne(
                    $request->input('nombre'),
                    $request->input('empresa')
                );
            }
            return redirect()->route('proveedor.todos');
        }

        return view('proveedores.nuevo_proveedor');
    }

    public function delete($id) {
        if (Gate::denies('access-providers')) {
            return redirect(url()->previous());
        }

        ProveedorService::deleteOne($id);

        return redirect()->route('proveedor.todos');    
    }

    public function update(Request $request, $id) {
        if (Gate::denies('access-providers')) {
            return redirect(url()->previous());
        }
        
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

    public function products(Request $request) {
        if ($request->input('provider_id')) {
            $proveedor = Proveedor::with('productos')->get()->find($request->input('provider_id'));
            
            $productos = $proveedor->productos;

            $htmlResults = view('proveedores.lista_productos', compact('productos'))->render();

            return $htmlResults;
        }
    }
}
