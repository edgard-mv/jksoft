<?php

use Illuminate\Database\Seeder;

class CreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creditos')->insert([
            'venta_id'=>7,
            'cliente'=>'Maria Jose',
            'monto'=>140,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        DB::table('creditos')->insert([
            'venta_id'=>8,
            'cliente'=>'Bersal Rodriguez',
            'monto'=>1530,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        DB::table('creditos')->insert([
            'venta_id'=>9,
            'cliente'=>'Juan Antonio Bermudez',
            'monto'=>80,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        DB::table('creditos')->insert([
            'venta_id'=>11,
            'cliente'=>'Bersal Rodriguez',
            'monto'=>400,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        DB::table('creditos')->insert([
            'venta_id'=>12,
            'cliente'=>'Mario Calero',
            'monto'=>120,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        DB::table('creditos')->insert([
            'venta_id'=>13,
            'cliente'=>'Mario Calero',
            'monto'=>160,
            'fecha_de_pago'=>'2020-05-12'                        
        ]);

        
    }
}
