<?php

use Illuminate\Database\Seeder;

class ProductoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>120,
            'fecha'=>14-05-2020,
                                      
        ]);
    }
}
