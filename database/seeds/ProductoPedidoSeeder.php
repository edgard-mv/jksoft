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
            'fecha'=>12-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>600,
            'fecha'=>25-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>100,
            'fecha'=>22-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>40,
            'fecha'=>21-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>10,
            'fecha'=>20-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>300,
            'fecha'=>20-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>120,
            'fecha'=>20-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>25,
            'fecha'=>17-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>60,
            'fecha'=>17-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>134,
            'fecha'=>17-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>12,
            'fecha'=>16-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>13,
            'fecha'=>16-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>79,
            'fecha'=>16-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>34,
            'fecha'=>15-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>15,
            'fecha'=>15-05-2020,
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'cantidad_producto'=>190,
            'fecha'=>15-05-2020,
                                      
        ]);

    }
}
