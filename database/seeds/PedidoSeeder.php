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
            'trabajador_id'=>1,
            'cantidad_total'=>120,
            'monto_total'=>12300,
            'estado'=>'Realizado',    
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>1,
            'cantidad_total'=>600,
            'monto_total'=>1400,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>1,
            'cantidad_total'=>100,
            'monto_total'=>1300,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>2,
            'cantidad_total'=>40,
            'monto_total'=>1100,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>2,
            'cantidad_total'=>10,
            'monto_total'=>600,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>300,
            'monto_total'=>1500,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>1,
            'cantidad_total'=>120,
            'monto_total'=>660,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>78,
            'monto_total'=>1200,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>1,
            'cantidad_total'=>25,
            'monto_total'=>355,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>2,
            'cantidad_total'=>60,
            'monto_total'=>2000,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>2,
            'cantidad_total'=>134,
            'monto_total'=>1250,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>12,
            'monto_total'=>400,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>13,
            'monto_total'=>500,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>90,
            'monto_total'=>1267,
            'estado'=>'Realizado', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>3,
            'cantidad_total'=>79,
            'monto_total'=>900,
            'estado'=>'Pendiente', 
                                     
        ]);


        DB::table('pedidos')->insert([
            'trabajador_id'=>2,
            'cantidad_total'=>34,
            'monto_total'=>763,
            'estado'=>'Realizado', 

                                     
        ]);
    }
}
