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
            'fecha'=>21-05-2020,
            'comentarios'=>'Pago 10 cordobas , resta 100'                         
        ]);
    }
}
