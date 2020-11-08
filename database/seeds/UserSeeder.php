<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@flor.com',
            'password'=>Hash::make('password'),
            'email_verified_at'=>Carbon::now()->format('Y-m-d'),
            'role'=>1
        ]);

        DB::table('users')->insert([
            'name'=>'Inventario',
            'email'=>'inventario@flor.com',
            'password'=>Hash::make('contra'),
            'email_verified_at'=>Carbon::now()->format('Y-m-d'),
            'role'=>2
        ]);

        DB::table('users')->insert([
            'name'=>'Ventas',
            'email'=>'ventas@flor.com',
            'password'=>Hash::make('contra'),
            'email_verified_at'=>Carbon::now()->format('Y-m-d'),
            'role'=>3
        ]);
    }
}
