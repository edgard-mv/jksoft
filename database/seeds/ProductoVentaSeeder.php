<?php

use Illuminate\Database\Seeder;

class ProductoVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_venta')->insert([
            ['venta_id'=>1, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)],
            ['venta_id'=>1, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)],
            ['venta_id'=>1, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)],
            ['venta_id'=>2, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)],
            ['venta_id'=>2, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)],
            ['venta_id'=>2, 'producto_id'=>random_int(1, 100), 'cantidad_producto'=>random_int(1, 100)]
        ]);
    }
}
