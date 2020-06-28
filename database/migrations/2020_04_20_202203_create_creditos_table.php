<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->string('cliente');
            $table->decimal('monto', 13, 2);
            $table->date('fecha_de_pago');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('creditos', function (Blueprint $table) {
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
        Schema::dropIfExists('creditos');
    }
}
