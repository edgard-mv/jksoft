<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'cantidad total'=>120,
            'monto_total'=>12300,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>600,
            'monto_total'=>1400,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>100,
            'monto_total'=>1300,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>40,
            'monto_total'=>1100,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>10,
            'monto_total'=>600,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>300,
            'monto_total'=>1500,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>120,
            'monto_total'=>660,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>78,
            'monto_total'=>1200,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>25,
            'monto_total'=>355,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>60,
            'monto_total'=>2000,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>134,
            'monto_total'=>1250,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>12,
            'monto_total'=>400,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>13,
            'monto_total'=>500,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>90,
            'monto_total'=>1267,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>79,
            'monto_total'=>900,
                                     
        ]);


        DB::table('pedidos')->insert([
            'cantidad total'=>34,
            'monto_total'=>763,

                                     
        ]);
    }
}
