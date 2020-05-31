<?php

use Illuminate\Database\Seeder;

class SalarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salarios')->insert([
            'trabajador_id'=>1,
            'horas'=>120,
            'dias'=>14,
            'pago_por_hora'=>3600
        ]);

        DB::table('salarios')->insert([
            'trabajador_id'=>2,
            'horas'=>120,
            'dias'=>14,
            'pago_por_hora'=>3600
        ]);

        DB::table('salarios')->insert([
            'trabajador_id'=>3,
            'horas'=>120,
            'dias'=>14,
            'pago_por_hora'=>3600
        ]);
    }
}
