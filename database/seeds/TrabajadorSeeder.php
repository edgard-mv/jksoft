<?php

use Illuminate\Database\Seeder;

class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Trabajadores')->insert([
            'nombre'=>'Ramiro Jose Espinoza Espinoza',
            'edad'=>24,
            'telefono'=>84319220                  
        ]);

        DB::table('Trabajadores')->insert([
            'nombre'=>'Carlos Alfredo Gonzales Navarro',
            'edad'=>22,
            'telefono'=>83337182                  
        ]);

        DB::table('Trabajadores')->insert([
            'nombre'=>'Mario Alejandro Urbina Malespin',
            'edad'=>25,
            'telefono'=>76341730                  
        ]);



    }
}
