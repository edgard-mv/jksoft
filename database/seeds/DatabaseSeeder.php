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
            ProductoSeeder::class,
            VentaSeeder::class,                   
            CreditoSeeder::class,
            AbonoSeeder::class,
            ContadoSeeder::class,
            TrabajadorSeeder::class,
            PedidoSeeder::class,
            ProductoPedidoSeeder::class,
            ProveedorSeeder::class,
            ProveedorProductoSeeder::class,
            SalarioSeeder::class,
        ]);
    }
}
