<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abono', function (Blueprint $table) {
            $table->incremets('abono');
            $table->integer('id_credito');
            $table->foreign('id_credito')->references('id_credito')->on('credito');
            $table->integer('cantidad');
            $table->date('fecha');
            $table->string('comentarios');
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
        Schema::dropIfExists('abono');
    }
}
