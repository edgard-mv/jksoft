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
            'fecha'=>'2020-01-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-02-01',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-14',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-02-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-01-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-05',
            'estado'=>'Pendiente'
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-03-10',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-04-08',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-03-19',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-21',
            'estado'=>'Saldado'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-15',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-13',
            'estado'=>'Pendiente'                          
        ]);

        DB::table('ventas')->insert([
            'fecha'=>'2020-05-16',
            'estado'=>'Pendiente'                          
        ]);     

    }
}
