<?php

namespace App\Services;

use App\Venta;
use App\Producto;

use Carbon\Carbon;

class VentaService {
    public static function getAll() {
        return Venta::all();
    }

    public static function createOne(
        $order, 
        $total
    ) {
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

        return true;
    }
}