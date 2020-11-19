<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpProveedoresGetAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            DROP PROCEDURE IF EXISTS spProveedores_GetAll;

            CREATE PROCEDURE spProveedores_GetAll()
            BEGIN
                SELECT
                    *
                FROM
                    proveedores
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
        DB::unprepared('DROP PROCEDURE IF EXISTS spProveedores_GetAll');
    }
}
