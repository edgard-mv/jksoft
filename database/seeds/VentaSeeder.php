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
            'estado'=>'Bueno'                          
        ]);
    }
}
