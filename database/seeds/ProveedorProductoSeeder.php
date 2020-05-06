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
            
            'cantidad'=>120,
            'fecha'=>14,
                                      
        ]);
    }
}
