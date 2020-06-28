<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpChartProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS spChart_Proveedores;

        CREATE PROCEDURE spChart_Proveedores()
        BEGIN
           (SELECT proveedores.empresa, SUM(proveedor_producto.cantidad) as total
            FROM proveedores  join proveedor_producto 
            ON proveedores.id=proveedor_producto.proveedor_id
            GROUP BY proveedores.empresa
            ORDER BY total asc
            LIMIT 1 )
        UNION
           (Select proveedores.empresa, SUM(proveedor_producto.cantidad) as total
            FROM proveedores  join proveedor_producto 
            ON proveedores.id=proveedor_producto.proveedor_id
            GROUP BY proveedores.empresa
            ORDER BY total desc
            LIMIT 1);
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
          DB::unprepared('DROP PROCEDURE IF EXISTS spChart_Proveedores');

    }
}
