<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpProductosGetAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            DROP PROCEDURE IF EXISTS spProductos_GetAll;

            CREATE PROCEDURE spProductos_GetAll()
            BEGIN
                SELECT
                    *
                FROM
                    productos
                WHERE deleted_at IS NULL;
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
        DB::unprepared('DROP PROCEDURE IF EXISTS spProductos_GetAll');
    }
}
