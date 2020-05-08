<?php

use Illuminate\Database\Seeder;

class ProveedorProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>1,
            'producto_id'=>76,
            'cantidad'=>120,
            'fecha'=>'12-05-2020',
                                      
        ]);
        
       

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>1,
            'producto_id'=>73,
            'cantidad'=>600,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>2,
            'producto_id'=>1,
            'cantidad'=>100,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>3,
            'producto_id'=>67,
            'cantidad'=>40,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>3,
            'producto_id'=>68,

            'cantidad'=>10,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>7,
            'producto_id'=>16,
            
            'cantidad'=>50,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>7,
            'producto_id'=>17,
            'cantidad'=>30,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>8,
            'producto_id'=>145,
            'cantidad'=>25,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>8,
            'producto_id'=>146,
            'cantidad'=>60,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>10,
            'producto_id'=>237,
            'cantidad'=>134,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>10,
            'producto_id'=>238,
            'cantidad'=>12,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>11,
            'producto_id'=>18,            
            'cantidad'=>25,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>12,
            'producto_id'=>200,
            'cantidad'=>100,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>12,
            'producto_id'=>203, 
            'cantidad'=>100,
            'fecha'=>'12-05-2020',
                                      
        ]);

        DB::table('proveedor_producto')->insert([
            'proveedor_id'=>15,
            'producto_id'=>31,
            'cantidad'=>60,
            'fecha'=>'12-05-2020',
                                      
        ]);

        
    }
}
