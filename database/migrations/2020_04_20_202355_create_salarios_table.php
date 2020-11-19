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
            $table->id();
            $table->unsignedBigInteger('trabajador_id');
            $table->integer('horas');
            $table->integer('dias');
            $table->float('pago_por_hora');
            $table->integer('extra')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('salarios', function (Blueprint $table) {
            $table->foreign('trabajador_id')
                    ->references('id')
                    ->on('trabajadores')
                    ->onDelete('cascade');
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
