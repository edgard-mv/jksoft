<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Gate;
use Creditos;
use Contados;



class EstadisticasVentasController extends Controller
{
    function index(){
        if (Gate::denies('access-statistics')) {
            return redirect(url()->previous());
        }
        
        $contados= DB::select('SELECT 
        COUNT(venta_id) as ventasobtenidas,
        SUM(monto) as total, 
        ROUND(AVG(monto),2) as promedio,
        MAX(monto) as maximo,
        MIN(monto) as minimo
        FROM contados');

        $chartcontados=DB::table('contados')->get();

        $creditos= DB::select('SELECT 
        COUNT(venta_id)  ventasobtenidas,
        SUM(monto) AS total, 
        MAX(monto) AS maximo,
        MIN(monto) AS minimo,
        ROUND(AVG(monto),2) AS promedio
        FROM creditos');

        $chartcreditos=DB::select('SELECT creditos.monto AS monto_total,
        abonos.id AS identificador,
        (abonos.cantidad) AS totales
        FROM creditos
        JOIN abonos 
        WHERE abonos.credito_id=creditos.id
        ');

         return view(
             'Estadisticas.estadistica_ventas',
             compact(
             'contados',
             'creditos',
             'chartcontados',
             'chartcreditos'));
        }


        function Dates(Request $request){
            if (Gate::denies('access-statistics')) {
                return redirect(url()->previous());
            }

            if ($request->isMethod('get') and $request->input('fechainicio') and $request->input('fechafin')) {
                {
        
                $Initialdate = $request->input('fechainicio');
                $Finaldate=$request->input('fechafin');

                $contados= DB::select('call sp_Ventas_Contado(?,?)',array($Initialdate,$Finaldate));
        
                $chartcontados=DB::table('contados')
                ->JOIN('ventas','ventas.id','=','contados.venta_id')
                ->WHERE('fecha','>=',$Initialdate,'and','fecha','<=',$Finaldate)
                ->get();
        
                $creditos= DB::select('call sp_Ventas_Credito(?,?)',array($Initialdate,$Finaldate));

        
                $chartcreditos=DB::select('SELECT creditos.monto AS monto_total,
                abonos.id AS identificador,
                (creditos.monto-abonos.cantidad) AS totales
                FROM creditos
                JOIN abonos 
                ON abonos.credito_id=creditos.id 
                JOIN ventas 
                ON ventas.id=creditos.venta_id
                WHERE ventas.fecha BETWEEN ? AND ?
                ',[$Initialdate,$Finaldate]);


                
                return view(
                    'Estadisticas.estadistica_ventas',
                    compact(
                    'contados',
                    'creditos',
                    'chartcontados',
                    'chartcreditos'));

                }

                redirect()->route('estadistica.ventas');

        }
    }
}
