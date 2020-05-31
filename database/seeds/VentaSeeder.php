<?php

use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            'producto_id'=>1,
            'nombre_producto'=>'Protex',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>170,
            'nombre_producto'=>'Mantequilla',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>172,
            'nombre_producto'=>'chips Ahoy',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>137,
            'nombre_producto'=>'Zepol Vaso',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>130,
            'nombre_producto'=>'Amoxicilina',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>86,
            'nombre_producto'=>'pepsi 3 litros',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>76,
            'nombre_producto'=>'Coca dos litros',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>71,
            'nombre_producto'=>'leche fresa',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>84,
            'nombre_producto'=>'Pepsi litro',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>1,
            'nombre_producto'=>'Jabon Plus Clean',
            'fecha'=>'2020-05-21',
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>86,
            'nombre_producto'=>'pepsi 3 litros',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>5,
            'nombre_producto'=>'Doña blanca(jabon pequeño)',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'producto_id'=>59,
            'nombre_producto'=>'Mecha de lampazo XL',
            'fecha'=>'2020-05-21',
            'estado'=>'Credito'                          
        ]);     

    }
}
