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
            'credito_id'=>1,
            'cantidad'=>10,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 10 cordobas , resta 100'                         
        ]);

        
        DB::table('abonos')->insert([
            'credito_id'=>2,
            'cantidad'=>100,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 100 cordobas , resta 700'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>3,
            'cantidad'=>1500,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 1500 cordobas , resta 400'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>4,
            'cantidad'=>600,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 600 cordobas , resta 1000'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>5,
            'cantidad'=>400,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 400 cordobas , resta 800'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>6,
            'cantidad'=>700,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 700 cordobas , resta 1000'                         
        ]);



    }
}
