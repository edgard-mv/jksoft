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
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Pendiente'                          
        ]);     

    }
}
