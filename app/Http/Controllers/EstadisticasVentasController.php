<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Creditos;
use Contados;



class EstadisticasVentasController extends Controller
{
    function index(){

        
        $contados= DB::select('SELECT 
        COUNT(venta_id) as ventasobtenidas,
        SUM(monto) as total, 
        ROUND(AVG(monto),2) as promedio,
        MAX(monto) as maximo,
        MIN(monto) as minimo,
        MAX(monto) as stockmayor
        FROM contados');

        $chartcontados=DB::table('contados')->get();

        $creditos= DB::select('SELECT 
        COUNT(venta_id)  ventasobtenidas,
        SUM(monto) AS total, 
        MAX(monto) AS maximo,
        MIN(monto) AS minimo,
        ROUND(AVG(monto),2) AS promedio,
        MAX(monto) AS stockmayor
        FROM creditos');

        $chartcreditos=DB::select('SELECT creditos.monto AS monto_total,
        abonos.id AS identificador,
        (creditos.monto-abonos.cantidad) AS totales
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

}
