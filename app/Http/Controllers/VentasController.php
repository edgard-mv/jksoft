<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Venta;

class VentasController extends Controller
{
    public function getAll() {
        $ventas = Venta::with('productos')->get();

        foreach ($ventas as $venta) {
            if ($venta->contado()->exists()) {
                $venta['tipo'] = 'Contado';
            } elseif ($venta->credito()->exists()) {
                $venta['tipo'] = 'Crédito';
            }

            $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                return $total + $producto->pivot->monto;
            });
        }

        return view('ventas.venta', compact('ventas'));
    }

    public function getSaleBy(Request $request)
    {
        $type = $request->input('tipo');

        if ($type == "contado") {
            $ventas = Venta::with('productos')->has('contado')->get();

            $ventas->each(function ($venta) {
                $venta['tipo'] = 'Contado';
    
                $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                    return $total + $producto->pivot->monto;
                });
            });                
        } elseif ($type == "credito") {
            $ventas = Venta::with('productos')->has('credito')->get();

            $ventas->each(function ($venta) {
                $venta['tipo'] = 'Crédito';
    
                $venta['monto_total'] = $venta->productos->reduce(function ($total, $producto) {
                    return $total + $producto->pivot->monto;
                });
            });                
        }


        return view('ventas.venta', compact('ventas', 'type'));
    }
}
