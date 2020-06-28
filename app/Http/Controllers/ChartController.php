<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Productos;


class ChartController extends Controller
{
    public function index(){

        $circularchart = DB::select('CALL spChart_Proveedores()');

        $prod= DB::select('SELECT 
                            COUNT(id) as total, 
                            ROUND(AVG(precio),2) as promedio,
                            MAX(precio) as maximo,
                            MIN(precio) as minimo,
                            MAX(cantidad) as stockmayor
                            FROM productos');

        $stockminimo= DB::table('productos')
                    ->where('cantidad', '<', 5)
                    ->OrderBy('cantidad')
                    ->paginate(5);
        
        $total_proveedor=DB::select('SELECT
                                COUNT(empresa) as total_p
                                FROM proveedores
                            ');

        return view('home', compact('circularchart','prod','stockminimo'));


        }


        public function Dates(Request $request){

            if ($request->isMethod('get') and $request->input('fechainicio') and $request->input('fechafin')) {
            {
            $Initialdate = $request->input('fechainicio');
            $Finaldate=$request->input('fechafin');

            $circularchart = DB::select('CALL spChart_Proveedores()');

            $prod= DB::select('SELECT 
                                COUNT(id) as total, 
                                ROUND(AVG(precio),2) as promedio,
                                MAX(precio) as maximo,
                                MIN(precio) as minimo,
                                MAX(cantidad) as stockmayor
                                FROM productos
                                WHERE updated_at between ? and ?',[$Initialdate,$Finaldate]
                                );
    
            $stockminimo= DB::table('productos')->where('cantidad', '<', 5)->OrderBy('cantidad')->paginate(5);

            
            $total_proveedor=DB::select('SELECT
                                    COUNT(empresa) as total_p
                                    FROM proveedores
                                ');
    
            return view('home', compact('circularchart','prod','stockminimo'));
    

            }
            return redirect()->route('estadistica.productos');
        }
    }

    
}