<?php

namespace App\Services;

use App\Proveedor;

class ProveedorService {
    public static function getAll() {
        return Proveedor::all();
    }

    public static function createOne(
        $name, 
        $company
    ) {
        $proveedor = new Proveedor;

        $proveedor->nombre = $name;
        $proveedor->empresa = $company;

        $proveedor->save();

        return true;
    }

    public static function search($value, $type) {
        if ($type == 'id') {
            $proveedores = Proveedor::find($value);
            if (!$proveedores) {
                return collect([])->paginate(15);
            } else {
                return collect([$proveedores])->paginate(15);
            }
        } elseif ($type == 'empresa') {
            return Proveedor::where('empresa', 'like', '%'. $value .'%')->paginate(15);
        } elseif ($type == 'nombre') {
            return Proveedor::where('nombre', 'like', '%'. $value .'%')->paginate(15);
        }
    }

    public static function deleteOne($id) {
        $proveedor = Proveedor::find($id);
        
        $proveedor->productos()->each(function ($producto) {
            if ($producto->proveedores()->count() == 1) {
                $producto->delete();
            }
        });

        $proveedor->delete();
    }
}
