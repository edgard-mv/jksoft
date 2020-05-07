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
            'nombre_producto'=>'Jabon protex',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Mantequilla',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'chips Ahoy',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Zepol Vaso',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Amoxicilina',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'pepsi 3 litros',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Coca dos litros descartable',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'leche fresa',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Pepsi litro',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Jabon protex',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'pepsi 3 litros',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Jabon protex',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Mecha de lampazo XL',
            'fecha'=>06-05-2020,
            'estado'=>'Credito'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'Colgate tripe',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'xedex grande',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'sepillo de dientes primiun',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);

        DB::table('ventas')->insert([
            'nombre_producto'=>'xedex grande',
            'fecha'=>06-05-2020,
            'estado'=>'Contado'                          
        ]);


    }
}
