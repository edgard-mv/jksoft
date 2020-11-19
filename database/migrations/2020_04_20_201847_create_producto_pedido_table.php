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
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad_producto');
            $table->decimal('precio_compra', 13, 2);
            $table->date('fecha');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('producto_pedido', function (Blueprint $table) {
            $table->foreign('pedido_id')
                    ->references('id')
                    ->on('pedidos')
                    ->onDelete('cascade');
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')
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
        Schema::dropIfExists('producto_pedido');
    }
}
