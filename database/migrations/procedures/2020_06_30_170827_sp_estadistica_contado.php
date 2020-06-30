<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpEstadisticaContado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_Ventas_Contado;

        CREATE PROCEDURE sp_Ventas_Contado(
            in fechainicio date,
            in fechafin date
        )
        BEGIN
        SELECT
        COUNT(venta_id) as ventasobtenidas,
        SUM(monto) as total, 
        ROUND(AVG(monto),2) as promedio,
        MAX(monto) as maximo,
        MIN(monto) as minimo
        FROM contados
        Join ventas
        ON contados.venta_id=ventas.id
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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_Ventas_Contado');
    }
}
