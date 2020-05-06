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
    }
}
