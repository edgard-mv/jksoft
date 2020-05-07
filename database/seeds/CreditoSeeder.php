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
            'cliente'=>'Maria Jose',
            'monto'=>14,
            'fecha_de_pago'=>13-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Bersal Rodriguez',
            'monto'=>1530,
            'fecha_de_pago'=>13-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Juan Antonio Bermudez',
            'monto'=>80,
            'fecha_de_pago'=>10-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Bersal Rodriguez',
            'monto'=>400,
            'fecha_de_pago'=>16-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Mario Calero',
            'monto'=>120,
            'fecha_de_pago'=>11-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Mario Calero',
            'monto'=>60,
            'fecha_de_pago'=>12-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Mario calero',
            'monto'=>300,
            'fecha_de_pago'=>13-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Carmen Gil',
            'monto'=>600,
            'fecha_de_pago'=>13-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Rodrigo Veraz',
            'monto'=>230,
            'fecha_de_pago'=>13-05-2020
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Luis Alegria',
            'monto'=>450,
            'fecha_de_pago'=>13-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Luis Alegria',
            'monto'=>1200,
            'fecha_de_pago'=>10-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Luis Estrada',
            'monto'=>1500,
            'fecha_de_pago'=>19-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Bernardo Cabrera',
            'monto'=>1500,
            'fecha_de_pago'=>07-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Jose feliciano Estrada',
            'monto'=>800,
            'fecha_de_pago'=>07-05-2020                        
        ]);

        DB::table('creditos')->insert([
            'cliente'=>'Raquel Ramirez',
            'monto'=>140,
            'fecha_de_pago'=>07-05-2020                        
        ]);
    }
}
