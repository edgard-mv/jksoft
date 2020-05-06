<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpProveedorProductoGetAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            DROP PROCEDURE IF EXISTS spProveedorProducto_GetAll;

            CREATE PROCEDURE spProveedorProducto_GetAll()
            BEGIN
                SELECT
                    *
                FROM
                    proveedor_producto;
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
        DB::unprepared('DROP PROCEDURE IF EXISTS spProveedorProducto_GetAll');
    }
}
