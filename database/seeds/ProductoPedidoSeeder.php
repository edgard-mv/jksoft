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
            'pedido_id'=>1,
            'producto_id'=>1,
            'cantidad_producto'=>120,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>2,
            'producto_id'=>2,
            'cantidad_producto'=>600,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>3,
            'producto_id'=>70,
            'cantidad_producto'=>100,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>4,
            'producto_id'=>55,
            'cantidad_producto'=>40,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>5,
            'producto_id'=>10,
            'cantidad_producto'=>10,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>6,
            'producto_id'=>28,
            'cantidad_producto'=>300,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>7,
            'producto_id'=>47,
            'cantidad_producto'=>120,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>8,
            'producto_id'=>67,
            'cantidad_producto'=>78,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>9,
            'producto_id'=>68,
            'cantidad_producto'=>25,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>10,
            'producto_id'=>72,
            'cantidad_producto'=>60,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>11,
            'producto_id'=>76,
            'cantidad_producto'=>134,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>12,
            'producto_id'=>100,
            'cantidad_producto'=>12,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>13,
            'producto_id'=>115,
            'cantidad_producto'=>13,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>14,
            'producto_id'=>75,
            'cantidad_producto'=>90,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>15,
            'producto_id'=>89,
            'cantidad_producto'=>79,
            'fecha'=>'2020-05-12',
                                      
        ]);

        DB::table('producto_pedido')->insert([
            'pedido_id'=>16,
            'producto_id'=>22,
            'cantidad_producto'=>34,
            'fecha'=>'2020-05-12',
                                      
        ]);

    }
}
