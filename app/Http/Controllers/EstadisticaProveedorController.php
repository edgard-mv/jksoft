<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Productos;

class EstadisticaProveedorController extends Controller
{

    public function index(){

        $total_proveedor=DB::select('SELECT
        COUNT(empresa) as total_p
        FROM proveedores 
        ');

        $chart_providers=DB::select('SELECT proveedores.empresa as nombre,
        SUM(proveedor_producto.cantidad) as total
        from proveedores  join proveedor_producto 
        on proveedores.id=proveedor_producto.proveedor_id
        group by proveedores.empresa
        order by proveedores.empresa asc
        ');

        $lastdate=DB::select('SELECT
                MAX(fecha) as fechas
                FROM
                proveedor_producto
        ');

        $rangos=DB::select('CALL spChart_Proveedores()');

        return view('Estadisticas.estadistica_pr',compact('total_proveedor','rangos','chart_providers','lastdate'));

    }

    public function Dates(Request $request){

        if ($request->isMethod('get') and $request->input('fechainicio') and $request->input('fechafin')) {
        {

        $Initialdate = $request->input('fechainicio');
        $Finaldate=$request->input('fechafin');

        $total_proveedor=DB::select('SELECT
        COUNT(empresa) as total_p
        FROM proveedores 
        ');

        $chart_providers=DB::select('SELECT proveedores.empresa as nombre,
        SUM(proveedor_producto.cantidad) as total
        from proveedores  join proveedor_producto 
        on proveedores.id=proveedor_producto.proveedor_id
        group by proveedores.empresa
        order by proveedores.empresa asc
        ');;
        
        $lastdate=DB::select('SELECT
                MAX(fecha) as fechas
                FROM
                proveedor_producto
                Where fecha BETWEEN ? and ? ',[$Initialdate, $Finaldate]
        );

        $rangos=DB::select('CALL spChart_Proveedores()');


        return view('Estadisticas.estadistica_pr', compact('total_proveedor','rangos','chart_providers','lastdate'));

        }
         return redirect()->route('estadistica.proveedores');
    }

    }


    
}
