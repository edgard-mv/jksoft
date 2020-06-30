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
            'cantidad'=>100,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 100 cordobas , resta 40'                         
        ]);

        
        DB::table('abonos')->insert([
            'credito_id'=>2,
            'cantidad'=>1000,
            'fecha'=>'2020-06-06',
            'comentarios'=>'Pago 1000 cordobas , resta 530'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>3,
            'cantidad'=>40,
            'fecha'=>'2020-04-28',
            'comentarios'=>'Pago 40 cordobas , resta 40'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>4,
            'cantidad'=>200,
            'fecha'=>'2020-01-10',
            'comentarios'=>'Pago 200 cordobas , resta 200'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>5,
            'cantidad'=>100,
            'fecha'=>'2020-03-12',
            'comentarios'=>'Pago 100 cordobas , resta 20'                         
        ]);


        DB::table('abonos')->insert([
            'credito_id'=>6,
            'cantidad'=>100,
            'fecha'=>'2020-05-21',
            'comentarios'=>'Pago 100 cordobas , resta 60'                         
        ]);



    }
}
