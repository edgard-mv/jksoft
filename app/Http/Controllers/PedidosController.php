<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Trabajador;
use App\Proveedor;
use App\Producto;

use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use DB;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function getAll() {
        if (Gate::denies('access-products')) {
            return redirect(url()->previous());
        }

        $pedidos = Pedido::with('trabajador')->get();
        return view('Pedido.pedidos',compact('pedidos'));
    }

    //Pedido::withTrashed()->where('id', 15)->restore(); prueba de restore

    public function delete($id) {
        if (Gate::denies('access-products')) {
            return redirect(url()->previous());
        }

        Pedido::destroy($id);

        return redirect()->route('pedidos.todos');    
    }
    
    public function create(Request $request) {
        if (Gate::denies('access-products')) {
            return redirect(url()->previous());
        }

        $fecha = Carbon::now();

        if ($request->isMethod('put')) {

            if ($request->input('pedido') and $request->input('operario_id')) {
                $trabajador = Trabajador::find($request->input('operario_id'));
                $pedidoActual = $request->input('pedido');
                
                $selectedItems = collect();
                foreach($pedidoActual as $id => $details) {
                    if (isset($details['selected'])) {
                        $details['sub_total'] = $details['price'] * $details['quantity'];
                        $selectedItems[$id] = $details;
                    }
                }

                $monto_total = 0;
                $monto_total = $selectedItems->reduce(function ($total, $producto) {
                    return $total + $producto['sub_total'];
                });

                $pedido = $trabajador->pedidos()->create([
                    'cantidad_total' => $selectedItems->count(),
                    'monto_total' => $monto_total,
                    'estado' => 'Pendiente'
                ]);

                $selectedItems->each(function ($item, $key) use($pedido, $fecha) {
                    $pedido->productos()->attach($key, [
                        'cantidad_producto' => $item['quantity'],
                        'precio_compra' => $item['price'],
                        'fecha' => $fecha
                    ]);
                });

                // return compact('selectedItems', 'pedidoActual', 'monto_total');
            }

            return redirect()->route('pedidos.todos');    
        }

        $operariosDisponibles = Trabajador::all();
        $proveedoresDisponibles = Proveedor::all();

        return view(
            'Pedido.crear',
            compact(
                'operariosDisponibles',
                'proveedoresDisponibles',
                'fecha'
            )
        );
    }


        public function update(Request $request,$id) {

            $pedido = Pedido::with('trabajador','productos')->get()->find($id);

            if ($request->isMethod('patch')) {

                //Cambio del estado del producto 
                if ($request->input('estado') ) {
                    $pedido->estado = $request->input('estado');
                }
                
                $pedido->save();
    
                //validaciones de productos
    
                return redirect()->route('pedidos.todos');
            }

    
            return view('Pedido.editar',compact('pedido'));
            }
    


        public function details(Request $request,$id) {
            $pedido = Pedido::with('trabajador','productos')->get()->find($id);

             return view('Pedido.detalles', compact('pedido'));
             //return compact('pedido');
        }
        

}
