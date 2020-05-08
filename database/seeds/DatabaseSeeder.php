<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AbonoSeeder::class,
            ContadoSeeder::class,
            CreditoSeeder::class,
            PedidoSeeder::class,
            ProductoPedidoSeeder::class,
            ProductoSeeder::class,
            ProveedorProductoSeeder::class,
            ProveedorSeeder::class,
            SalarioSeeder::class,
            TrabajadorSeeder::class,
            VentaSeeder::class,                   
        ]);
    }
}
