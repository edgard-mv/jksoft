<?php

use Illuminate\Database\Seeder;

class ContadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contados')->insert([
            'venta_id'=>1,
            'monto'=>120
                                    
        ]);


        DB::table('contados')->insert([
            'venta_id'=>2,
            'monto'=>700
                                    
        ]);

        DB::table('contados')->insert([
            'venta_id'=>3,
            'monto'=>14
                                    
        ]);

        DB::table('contados')->insert([
            'venta_id'=>4,
            'monto'=>70
                                    
        ]);

        DB::table('contados')->insert([
            'venta_id'=>5,
            'monto'=>20
                                    
        ]);


        DB::table('contados')->insert([
            'venta_id'=>6,
            'monto'=>1230
                                    
        ]);

        DB::table('contados')->insert([
            'venta_id'=>10,
            'monto'=>1120
                                    
        ]);

       
    }
}
