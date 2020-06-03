<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpOperariosGetAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        DROP PROCEDURE IF EXISTS spOperarios_GetAll;

        CREATE PROCEDURE spOperarios_GetAll()
        BEGIN
            SELECT
                *
            FROM
                trabajadores
            JOIN
                salarios
            ON
                trabajadores.id = salarios.trabajador_id;
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
        DB::unprepared('DROP PROCEDURE IF EXISTS spOperarios_GetAll');

    }
}
