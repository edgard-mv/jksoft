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

        return view('producto.productos', compact('productos'));
    }

    public function search(Request $request)
    {
        if ($request->isMethod('get') and $request->input('valor') and $request->input('tipo')) {
            $value = $request->input('valor');
            $type = $request->input('tipo');

            if ($type == 'id') {
                $productos = Producto::find($value);
                if (!$productos) {
                    $productos = collect([]);
                } else {
                    $productos = collect([$productos]);
                }
            } elseif ($type == 'empresa') {
                $productos = Producto::with('proveedores')->get()->filter(function ($producto) use($value) {
                    foreach ($producto->proveedores as $proveedor) {
                        if (stripos($proveedor->empresa, $value) !== False) {
                            return True;
                        }
                    }
                });
            } elseif ($type == 'nombre') {
                $productos = Producto::where('nombre', 'like', '%'. $value .'%')->get();
            }

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

        return redirect()->route('producto.todos');
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
            return redirect()->route('producto.todos');
        }

        return view('producto.editar', compact('producto'));
    }

    public function create(Request $request) {
        if ($request->isMethod('put')) {
            if ($request->input('nombre') and $request->input('cantidad') and $request->input('precio')) {
                $producto = new Producto;
                $producto->nombre = $request->input('nombre');
                $producto->cantidad = $request->input('cantidad');
                $producto->precio = $request->input('precio');

                $producto->save();

                $this->addProveedor($request, $producto->id);
            }

            return redirect()->route('producto.todos');
        }

        $proveedoresDisponibles = DB::select('CALL spProveedores_GetAll()');
        $fecha = Carbon::now();


        return view(
            'producto.crear',
            compact(
                'proveedoresDisponibles',
                'fecha'
            )
        );
    }

    public function delete($id) {
        Producto::destroy($id);

        return redirect()->route('producto.todos');    
    }

    public function proveedores($id) {
        $producto = Producto::with('proveedores')->get()->find($id);
        $proveedoresDisponibles = DB::select('CALL spProveedores_GetAll()');
        $fecha = Carbon::now();

        $proveedores = $producto->proveedores;

        return view(
            'producto.proveedor',
            compact(
                'producto',
                'proveedores',
                'proveedoresDisponibles',
                'fecha'
            )
        );
    }

    public function updateProveedor(Request $request, $producto_id, $id) {
        if ($request->isMethod('patch')) {
            $producto = Producto::with('proveedores')->get()->find($producto_id);
            $proveedor = $producto->proveedores->find($id);

            if ($request->input('cantidad')) {
                $proveedor->pivot->cantidad = $request->input('cantidad');
            }

            $proveedor->pivot->save();
            return redirect()->route('producto.proveedores', ['id' => $producto_id]);
        }
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
