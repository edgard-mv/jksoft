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
        DB::table('proveedores')->insert([
            'nombre'=>'Juan Ernezto Gracia Jarquin',
            'empresa'=>'Coca Cola'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Jose Carlos Leiva Flores',
            'empresa'=>'Merconica'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Jeffry Alexander Navarro',
            'empresa'=>'LALA'
                            
        ]);
       
        DB::table('proveedores')->insert([
            'nombre'=>'Faustino Jesus Roman',
            'empresa'=>'DINANT'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Khistier Sandigo',
            'empresa'=>'Unilever'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Magaly Acosta',
            'empresa'=>'Interamericana de mercadeo'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Luis Diaz',
            'empresa'=>'Pollo Tip TOP'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Angy Fabela',
            'empresa'=>'Bimbo'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Josuè gudino Escobedo',
            'empresa'=>'Cafè Soluble S.A'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Victor Moreno',
            'empresa'=>'Carnes San Martin'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Esmeralda Navarro',
            'empresa'=>'Industrial Delmor'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Oswaldo Reyes',
            'empresa'=>'ENABAS'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Gabriel Valles',
            'empresa'=>'AGROSA'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Israel Rosas',
            'empresa'=>'Distribuidora Mi Redentor'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Wiliam Rivas',
            'empresa'=>'Compañia Cervecera de Nicaragua'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Oscar Muños Agero',
            'empresa'=>'Bocadeli'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Renata Austin Luna',
            'empresa'=>'Diana'
                            
        ]);
       

        DB::table('proveedores')->insert([
            'nombre'=>'Regina Mayorga Olivera',
            'empresa'=>'Distribuidora S.A'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Milton Gracia Arias',
            'empresa'=>'Pepsi'
                            
        ]);

        DB::table('proveedores')->insert([
            'nombre'=>'Yamil Antonio Hernandez Cordoba',
            'empresa'=>'Big Cola'
                            
        ]);

    }
}
