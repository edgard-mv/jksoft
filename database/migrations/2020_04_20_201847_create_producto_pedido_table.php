<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_pedido', function (Blueprint $table) {
            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->integer('cantidad_producto');
            $table->date('fecha');
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
        Schema::dropIfExists('producto_pedido');
    }
}
