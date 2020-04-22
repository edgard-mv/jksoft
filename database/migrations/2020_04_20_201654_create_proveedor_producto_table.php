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
            $table->integer('id_proveedor')->unsigned();//FK
            $table->integer('id_producto')->unsigned();//FK
            $table->integer('cantidad');
            $table->date('fecha');
            $table->timestamps();
        });

        Schema::table('proveedor_producto', function (Blueprint $table) {
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedors');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
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
