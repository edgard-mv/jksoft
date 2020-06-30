<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre'=>'Jabon plus clean',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')        
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Protex',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Palmolive',
            'cantidad'=>24,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'DK12',
            'cantidad'=>12,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Doña blanca(jabon pequeño)',
            'cantidad'=>26,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(grande)',
            'cantidad'=>10,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(pequeño)',
            'cantidad'=>36,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro nica',
            'cantidad'=>120,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Magia Blanca',
            'cantidad'=>180,
            'precio'=>7, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavisimo',
            'cantidad'=>120,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Rojo)',
            'cantidad'=>24,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Verde)',
            'cantidad'=>12,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin',
            'cantidad'=>36,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP(Pechuga)',
            'cantidad'=>25,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Carne San Martin',
            'cantidad'=>30,
            'precio'=>76, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Menudo TIPTOP',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin(Botella Morado)',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin (Botella Verde)',
            'cantidad'=>5,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Botella',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cloro botella(Morado)',
            'cantidad'=>4,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro botella(Verde)',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinesol',
            'cantidad'=>10,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish',
            'cantidad'=>26,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Polvo)',
            'cantidad'=>12,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Botella)',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Trasparente)',
            'cantidad'=>24,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza lata toña',
            'cantidad'=>100,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza Litro Toña',
            'cantidad'=>120,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Verde)',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Rosado)',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Blanco)',
            'cantidad'=>9,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(con bicarbonato)',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Blanco)',
            'cantidad'=>15,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Jabon bex (Transparente)',
            'cantidad'=>6,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Ultra)',
            'cantidad'=>33,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Azul)',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Rosado)',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(pequeño)',
            'cantidad'=>50,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Grande)',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Verde)',
            'cantidad'=>25,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Azul)',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra',
            'cantidad'=>35,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(verde)',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Blanco)',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Rosado)',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin',
            'cantidad'=>72,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin (Grande)',
            'cantidad'=>14,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil',
            'cantidad'=>60,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil(Rosado)',
            'cantidad'=>50,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex ',
            'cantidad'=>34,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex(Grande)',
            'cantidad'=>14,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Escobas',
            'cantidad'=>12,
            'precio'=>64, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lampaso',
            'cantidad'=>6,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso',
            'cantidad'=>18,
            'precio'=>48, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso XL',
            'cantidad'=>8,
            'precio'=>70, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Triple Accion',
            'cantidad'=>26,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Doble Accion',
            'cantidad'=>42,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate(Pequeña)',
            'cantidad'=>24,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oral B',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Clasico',
            'cantidad'=>72,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Premiun',
            'cantidad'=>24,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes para niños',
            'cantidad'=>14,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Medio litro',
            'cantidad'=>30,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche litro',
            'cantidad'=>20,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Taza',
            'cantidad'=>15,
            'precio'=>11, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocolita',
            'cantidad'=>15,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Leche Fresa',
            'cantidad'=>8,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola 12onza',
            'cantidad'=>48,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Medio litro',
            'cantidad'=>72,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Litro',
            'cantidad'=>48,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola litro y medio',
            'cantidad'=>26,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Dos litros (Retornable)',
            'cantidad'=>36,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Tres litros',
            'cantidad'=>15,
            'precio'=>56, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Pequeña)',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Medio litro)',
            'cantidad'=>26,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Litro)',
            'cantidad'=>20,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola dos litros',
            'cantidad'=>12,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola 3 litros',
            'cantidad'=>10,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'cantidad'=>40,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi litro',
            'cantidad'=>14,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi dos litros',
            'cantidad'=>21,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros',
            'cantidad'=>10,
            'precio'=>60, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros sabor',
            'cantidad'=>15,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo del valle',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'jugo del valle 3 litros',
            'cantidad'=>5,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC',
            'cantidad'=>26,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC TE',
            'cantidad'=>10,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')

            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo campestre',
            'cantidad'=>8,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler tapon rojo',
            'cantidad'=>33,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo de lata',
            'cantidad'=>33,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno',
            'cantidad'=>120,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno MK',
            'cantidad'=>60,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin dia',
            'cantidad'=>44,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin noche',
            'cantidad'=>40,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')    
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Virogrip',
            'cantidad'=>24,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'cantidad'=>24,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'cantidad'=>43,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Andrew',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alka selser',
            'cantidad'=>87,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol',
            'cantidad'=>80,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Omeprazol',
            'cantidad'=>50,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Raditidina',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Diclofenac',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bioprin',
            'cantidad'=>56,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Delor',
            'cantidad'=>50,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cure band',
            'cantidad'=>200,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panandol ultra',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tap-on',
            'cantidad'=>48,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Neuro fortan',
            'cantidad'=>57,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paracetamol',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolovitagia',
            'cantidad'=>50,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Loratadina',
            'cantidad'=>30,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol Mujer',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colipap',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Higado sanil',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol sinusitis',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dorival',
            'cantidad'=>50,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aspirina Forte',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'enterpmeback',
            'cantidad'=>60,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        
        DB::table('productos')->insert([
            'nombre'=>'supertiamina',
            'cantidad'=>50,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Uboprofeno',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alumin',
            'cantidad'=>112,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Amoxicilina',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol Extra',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alive',
            'cantidad'=>36,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol niño',
            'cantidad'=>100,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Losartan',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Furosemida',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol (pequeño)',
            'cantidad'=>30,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol Vaso',
            'cantidad'=>40,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan barra',
            'cantidad'=>144,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan pico',
            'cantidad'=>80,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pico Tostado',
            'cantidad'=>50,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarita',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron negro',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron Blanco',
            'cantidad'=>40,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>' Pan Lengua',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla M',
            'cantidad'=>10,
            'precio'=>38, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla XG',
            'cantidad'=>7,
            'precio'=>66, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguino',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguno Chocolate',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mr Brown',
            'cantidad'=>20,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Tostado',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Principe',
            'cantidad'=>7,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sponch',
            'cantidad'=>10,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bimbolete',
            'cantidad'=>14,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panquesito',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panqueque',
            'cantidad'=>4,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paleta payaso',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panditas',
            'cantidad'=>6,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoritas',
            'cantidad'=>6,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo Blanca',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui Rosada',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can',
            'cantidad'=>32,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Rosa',
            'cantidad'=>28,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Chocolate',
            'cantidad'=>22,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Club Social',
            'cantidad'=>32,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocomax',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz',
            'cantidad'=>60,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz con queso',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Soda',
            'cantidad'=>24,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chips Ahoy',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla de barra ESKIMO ',
            'cantidad'=>20,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno pequeño',
            'cantidad'=>20,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario',
            'cantidad'=>15,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario mediano',
            'cantidad'=>15,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario grande',
            'cantidad'=>15,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Block',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Libreta',
            'cantidad'=>10,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario 5 Materia',
            'cantidad'=>10,
            'precio'=>120, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz Bic',
            'cantidad'=>96,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz zebra',
            'cantidad'=>36,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sticker',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marcadores',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Resaltador',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Borrador',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador metalico',
            'cantidad'=>30,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador Plastico',
            'cantidad'=>20,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector liquido',
            'cantidad'=>24,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector seco',
            'cantidad'=>7,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
           
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acuarela',
            'cantidad'=>4,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega grande',
            'cantidad'=>8,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Regla',
            'cantidad'=>30,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega pequeña',
            'cantidad'=>10,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado faizan ',
            'cantidad'=>72,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado doña maria ',
            'cantidad'=>16,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco faizan ',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco tio pelon ',
            'cantidad'=>1,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco sin marca',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijol de saco ',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blanditos ',
            'cantidad'=>14,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blandito molido ',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar saco ',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar empacada ',
            'cantidad'=>74,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(cuarta) ',
            'cantidad'=>2,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(Medio) ',
            'cantidad'=>2,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(litro) ',
            'cantidad'=>2,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite Mazola galon ',
            'cantidad'=>6,
            'precio'=>270, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite Mazola medio galon ',
            'cantidad'=>5,
            'precio'=>135, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Nevax ',
            'cantidad'=>120,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot ',
            'cantidad'=>60,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot Rindemax ',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Encanto ',
            'cantidad'=>123,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Rosal ',
            'cantidad'=>120,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico encanto (4 unidades) ',
            'cantidad'=>10,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel rosal (4 unidades) ',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui pequeña ',
            'cantidad'=>34,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui grande ',
            'cantidad'=>66,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura ',
            'cantidad'=>48,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura (Grande) ',
            'cantidad'=>10,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Guizante  ',
            'cantidad'=>7,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Elote La costeña ',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Roma ',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Conchitas Roma ',
            'cantidad'=>17,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Milano ',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina pica pica ',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina sin picar ',
            'cantidad'=>19,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina Calvo ',
            'cantidad'=>13,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Aceite ',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Agua ',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Veguetales ',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa China ',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa soya ',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca Preparada',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto churro ',
            'cantidad'=>1500,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cafe presto vaso pequeño ',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto vaso grande ',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto 50Ml ',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora vaso ',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora Ceda  ',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan bolsa ',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Ramen ',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Vaso ',
            'cantidad'=>120,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bujia Philips ',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar ',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar media ',
            'cantidad'=>200,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar light ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta negra ',
            'cantidad'=>33,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta de chapa',
            'cantidad'=>20,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Achote',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa ',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso mediano (Lisano) ',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso grande (Lisano)',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada ',
            'cantidad'=>25,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada Grande ',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea mediana ',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea Grande',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marvoro ',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL ',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave ',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo ',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave ',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo ',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern ',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);








        DB::table('productos')->insert([
            'nombre'=>'Marvoro (Paquete) ',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde (Paquete)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL (Paquete)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul (Paquete)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL (Paquete)',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave (Paquete)',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo (Paquete)',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave (Paquete)',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo (Paquete)',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis (Paquete)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern (Paquete)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);


        

        

        

        

        

        

        

        

        

        


    



        









    }
}
