<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarios', function (Blueprint $table) {
            $table->increments('id_salario');
            $table->integer('id_trabajador')->unsigned();
            $table->foreign('id_trabajador')->references('id_trabajador')->on('trabajadors');
            $table->time('hora',0);
            $table->integer('dias');
            $table->float('pago_por_hora');
            $table->string('extra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salarios');
    }
}
