<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Producto;
use App\Proveedor;
use App\ProveedorProducto;
use Carbon\Carbon;
use DB;

class ProductosController extends Controller
{
    public function getAll() {
        $productos = Producto::with('proveedores')->get();

        foreach ($productos as $producto) {
            foreach ($producto->proveedores as $proveedor) {
                $proveedorProducto = ProveedorProducto::where([
                    ['proveedor_id', '=', $proveedor->id],
                    ['producto_id', '=', $producto->id],
                ])->first();

                $proveedor['cantidad'] = $proveedorProducto->cantidad;
            }
        }

        return view('producto.productos', compact('productos'));
    }

    public function update(Request $request, $id) {
        $producto = Producto::with('proveedores')->get()->find($id);

        foreach ($producto->proveedores as $proveedor) {
            $proveedorProducto = ProveedorProducto::where([
                ['proveedor_id', '=', $proveedor->id],
                ['producto_id', '=', $producto->id],
            ])->first();

            $proveedor['cantidad'] = $proveedorProducto->cantidad;
        }

        if ($request->isMethod('patch')) {
            if ($request->input('nombre')) {
                $producto->nombre = $request->input('nombre');
            }
            if ($request->input('cantidad')) {
                $producto->cantidad = $request->input('cantidad');
            }
            if ($request->input('precio')) {
                $producto->precio = $request->input('precio');
            }

            $producto->save();
            return redirect()->route('productos');
        }

        return view('producto.editar', compact('producto'));
    }

    public function proveedores($id) {
        $producto = Producto::with('proveedores')->get()->find($id);
        $proveedoresDisponibles = DB::select('CALL spProveedores_GetAll()');
        $fecha = Carbon::now();

        foreach ($producto->proveedores as $proveedor) {
            $proveedorProducto = ProveedorProducto::where([
                ['proveedor_id', '=', $proveedor->id],
                ['producto_id', '=', $producto->id],
            ])->first();

            $proveedor['cantidad'] = $proveedorProducto->cantidad;
        }

        $proveedores = $producto->proveedores;

        return view(
            'producto.proveedor',
            compact(
                'producto',
                'proveedores',
                'proveedoresDisponibles',
                'fecha'
            ));
    }

    public function updateProveedor(Request $request, $producto_id, $id) {
        $operario = Trabajador::find($id);

        $proveedor = $producto->proveedores->find($id);

        $proveedorProducto = ProveedorProducto::where([
            ['proveedor_id', '=', $id],
            ['producto_id', '=', $producto_id],
        ])->first();

        $proveedor['cantidad'] = $proveedorProducto->cantidad;

        if ($request->isMethod('patch')) {
            if ($request->input('cantidad')) {
                $proveedorProducto->cantidad = $request->input('cantidad');
            }

            $proveedorProducto->save();
            return redirect()->route('producto.proveedores', ['id' => $producto_id]);
        }

        return view('producto.editar_proveedor', compact('producto', 'proveedor'));
    }

    public function deleteProveedor($producto_id, $id=null) {
        $producto = Producto::with('proveedores')->get()->find($producto_id);
        $producto->proveedores()->detach($id);
        return redirect()->route('producto.proveedores', ['id' => $producto_id]);
    }

    public function addProveedor(Request $request, $producto_id) {
        if ($request->isMethod('put') and $request->input('proveedor_id') and $request->cantidad) {
            $producto = Producto::with('proveedores')->get()->find($producto_id);
            $producto->proveedores()->attach(
                $request->input('proveedor_id'),
                [
                    'cantidad' => $request->input('cantidad'),
                    'fecha' => $request->input('fecha')
                ]
            );
        }
        return redirect()->route('producto.proveedores', ['id' => $producto_id]);
    }

}
