<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venta;
use App\Producto;

use Carbon\Carbon;


class VentasController extends Controller
{
    public function getAll() {
        $ventas = Venta::with('productos')->get();

        foreach ($ventas as $venta) {
            if ($venta->contado()->exists()) {
                $venta['tipo'] = 'contado';
                $venta['monto_total'] = $venta->contado->monto;
            } elseif ($venta->credito()->exists()) {
                $venta['tipo'] = 'credito';

                $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                    return $total + $producto->pivot->monto;
                });
            }
        }

        return view('ventas.venta', compact('ventas'));
    }

    public function getSaleBy(Request $request) {
        $type = $request->input('tipo');

        if ($type == "contado") {
            $ventas = Venta::with('productos')->has('contado')->get();

            $ventas->each(function ($venta) {
                $venta['tipo'] = 'contado';
    
                $venta['monto_total'] = $venta->contado->monto;
                // $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                //     return $total + $producto->pivot->monto;
                // });
            });
        } elseif ($type == "credito") {
            $ventas = Venta::with('productos')->has('credito')->get();

            $ventas->each(function ($venta) {
                $venta['tipo'] = 'credito';
    
                $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                    return $total + $producto->pivot->monto;
                });
            });                
        }

        return view('ventas.venta', compact('ventas', 'type'));
    }

    public function details(Request $request, $tipo, $id) {
        if ($tipo == 'contado') {
            $venta = Venta::with('productos')->has('contado')->get()->find($id);

            $venta['tipo'] = 'contado';
            $venta['monto_total'] = $venta->contado->monto;

            return view('ventas.detalles_contado', compact('venta'));
        } elseif ($tipo == 'credito') {
            return view('ventas.detalles_credito');
        }
    }

    public function createContado(Request $request) {
        $order = session()->get('order');

        if (!$order) {
            $order = [];
            session()->put('order', $order);
        }

        if ($request->isMethod('PUT')) {
            $currentOrder = $request->input('order');

            foreach ($currentOrder as $id => $details) {
                $order[$id]['quantity'] = $details['quantity'];
            }
        }

        $total = 0;
        $msgs = [];

        foreach ($order as $id => $details) {
            $producto = Producto::find($id);

            if ($details['quantity'] > $producto->cantidad) {
                array_push($msgs, $producto->nombre .' sólo tiene '. $producto->cantidad .' unidades');
            }

            $order[$id]['nombre'] = $producto->nombre;
            $order[$id]['precio'] = $producto->precio;
            $order[$id]['subtotal'] = $producto->precio * $details['quantity'];

            $total += $order[$id]['subtotal'];
        }

        if ($request->isMethod('PUT') and empty($msgs)) {
            $venta = new Venta;

            $venta->fecha = Carbon::now();
            $venta->estado = 'Saldado';

            $venta->save();

            foreach ($order as $id => $details) {
                $venta->productos()->attach($id, [
                    'cantidad_producto' => $order[$id]['quantity'],
                    'precio_actual' => $details['precio'],
                    'monto' => $details['subtotal']
                ]);

                $producto = Producto::find($id);
                $producto->cantidad -= $order[$id]['quantity'];
                $producto->save();
            }

            $venta->contado()->create([
                'monto' => $total
            ]);
            
            session()->forget('order');
            return redirect()->route('venta.contado.nuevo');
        }

        session()->put('order', $order);
        
        return view('ventas.contado', compact('total', 'msgs'));
    }

    public function searchProductOrder(Request $request) {
        $value = $request->input('value');
        $results = collect();
        if ($value and strlen($value) >= 3) {
            $results = Producto::where('nombre', 'like', '%'. $value .'%')->limit(5)->get();
        }
        $htmlResults = view('ventas.resultados', compact('results'))->render();

        return $htmlResults;
    }

    public function addToOrder(Request $request) {
        $id = $request->input('producto_id');

        $producto = Producto::find($id);

        if (!$producto) {
            return redirect()->route('venta.contado.nuevo');
        }

        $order = session()->get('order');

        $cantidad = $request->input('cantidad');

        if ($cantidad > $producto->cantidad) {
            $msgs = [$producto->nombre .' sólo tiene '. $producto->cantidad .' unidades'];
            $htmlResponse = view('ventas.mensajes', compact('msgs'))->render();
            return $htmlResponse;
        }

        if (!$order) {
            $order = [
                $id => [
                    'quantity' => $cantidad
                ]
            ];
        } elseif (!isset($order[$id])) {
            $order[$id]['quantity'] = $cantidad;
        }

        $orderCurrentData = $request->input('order');
        if(isset($orderCurrentData)) {
            foreach ($orderCurrentData as $product_id => $quantity) {
                $order[$product_id] = $quantity;
            }    
        }

        session()->put('order', $order);
    }

    public function removeFromOrder(Request $request) {
        if ($request->id) {

            $order = session()->get('order');

            if (isset($order[$request->id])) {

                unset($order[$request->id]);

                session()->put('order', $order);
            }
        } else {
            session()->forget('order');
            return redirect()->route('venta.todos');
        }

        return redirect()->route('venta.contado.nuevo');
    }
}
