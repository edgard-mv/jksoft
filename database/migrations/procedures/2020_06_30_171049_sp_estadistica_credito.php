<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpEstadisticaCredito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_Ventas_Credito;

        CREATE PROCEDURE sp_Ventas_Credito(
            in fechainicio date,
            in fechafin date
        )
        BEGIN
            SELECT 
            COUNT(venta_id)  ventasobtenidas,
            SUM(monto) AS total, 
            MAX(monto) AS maximo,
            MIN(monto) AS minimo,
            ROUND(AVG(monto),2) AS promedio
            FROM creditos 
            JOIN ventas 
            ON creditos.venta_id=ventas.id
            WHERE fecha BETWEEN fechainicio AND fechafin;
        END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_Ventas_Credito');

    }
}
