<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contados', function (Blueprint $table) {
            $table->unsignedBigInteger('venta_id');
            $table->float('monto');
            $table->timestamps();
        });

        Schema::table('contados', function (Blueprint $table) {
            $table->foreign('venta_id')
                    ->references('id')
                    ->on('ventas')
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
        Schema::dropIfExists('contados');
    }
}
