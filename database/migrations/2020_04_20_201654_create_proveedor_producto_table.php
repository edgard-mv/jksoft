<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proveedor_id');//FK
            $table->unsignedBigInteger('producto_id');//FK
            $table->integer('cantidad');
            $table->date('fecha');
            $table->timestamps();
        });

        Schema::table('proveedor_producto', function (Blueprint $table) {
            $table->foreign('proveedor_id')
                    ->references('id')
                    ->on('proveedores')
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
        Schema::dropIfExists('proveedor_producto');
    }
}
