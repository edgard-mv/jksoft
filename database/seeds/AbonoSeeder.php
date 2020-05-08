<?php

use Illuminate\Database\Seeder;

class AbonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abonos')->insert([
            'cantidad'=>10,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 10 cordobas , resta 100'                         
        ]);

        
        DB::table('abonos')->insert([
            'cantidad'=>100,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 100 cordobas , resta 700'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>1500,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 1500 cordobas , resta 400'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>600,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 600 cordobas , resta 1000'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>400,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 400 cordobas , resta 800'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>700,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 700 cordobas , resta 1000'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>2000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 2000 cordobas , resta 1500'                         
        ]);

        DB::table('abonos')->insert([
            'cantidad'=>3000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 3000 cordobas , resta 0'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>5000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 5000 cordobas , resta 0'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>2400,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 2400 cordobas , resta 3000'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>700,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 700 cordobas , resta 100'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>10000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 10000 cordobas , resta 0'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>7000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 7000 cordobas , resta 1000'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>1500,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 1500 cordobas , resta 0'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>1000,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 1000 cordobas , resta 0'                         
        ]);


        DB::table('abonos')->insert([
            'cantidad'=>1030,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 1030 cordobas , resta 0'                         
        ]);
    }
}
