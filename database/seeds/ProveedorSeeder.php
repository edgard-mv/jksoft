<?php

use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Proveedores')->insert([
            'nombre'=>'Juan Ernezto Gracia Jarquin',
            'empresa'=>'Coca Cola'
                            
        ]);

        DB::table('Proveedores')->insert([
            'nombre'=>'Jose Carlos Leiva Flores',
            'empresa'=>'Merconica'
                            
        ]);

        DB::table('Proveedores')->insert([
            'nombre'=>'Jeffry Alexander Navarro',
            'empresa'=>'LALA'
                            
        ]);

        DB::table('Proveedores')->insert([
            'nombre'=>'Regina Mayorga Olivera',
            'empresa'=>'Distribuidora S.A'
                            
        ]);

        DB::table('Proveedores')->insert([
            'nombre'=>'Milton Gracia Arias',
            'empresa'=>'Pepsi'
                            
        ]);

        DB::table('Proveedores')->insert([
            'nombre'=>'Yamil Antonio Hernandez Cordoba',
            'empresa'=>'Big Cola'
                            
        ]);

    }
}
