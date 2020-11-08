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

    /**
     * Categorías válidas:
     * 
     * 'Carnes y Embutidos',
     * 'Granos basicos',
     * 'Frutas y Verduras',
     * 'Panadería y Dulces',
     * 'Aceite, Pasta y Legumbres',
     * 'Huevos y Lacteos',
     * 'Conservas y Comida Preparada',
     * 'Zumos y Bebidas',
     * 'Aperitivos',
     * 'Infantil',
     * 'Mariscos',
     * 'Cosmeticos',
     * 'Hogar y Limpieza'
     */

    /**
     * Unidades válidas:
     * 'botella',
     * 'lata',
     * 'bolsa',
     * 'vaso',
     * 'blister (n)',
     * 'paquete (n)'
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre'=>'Jabon plus clean',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')        
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Protex',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Palmolive',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'DK12',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Doña blanca(jabon pequeño)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(grande)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(pequeño)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro nica',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Magia Blanca',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>180,
            'precio'=>7, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavisimo',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Rojo)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP(Pechuga)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Carne San Martin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>76, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Menudo TIPTOP',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin(Botella Morado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin (Botella Verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Botella',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cloro botella(Morado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>4,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro botella(Verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinesol',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Polvo)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Botella)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Trasparente)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza lata toña',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza Litro Toña',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Rosado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Blanco)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>9,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(con bicarbonato)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Blanco)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Jabon bex (Transparente)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Ultra)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>33,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Azul)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Rosado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(pequeño)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Grande)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Azul)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>35,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(verde)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Blanco)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Rosado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>72,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin (Grande)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil(Rosado)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>34,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex(Grande)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Escobas',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>64, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lampaso',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>18,
            'precio'=>48, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso XL',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>70, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Triple Accion',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Doble Accion',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>42,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate(Pequeña)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oral B',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Clasico',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>72,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Premiun',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes para niños',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Medio litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Taza',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>11, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocolita',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Leche Fresa',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola 12onza',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Medio litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>72,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola litro y medio',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Dos litros (Retornable)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Tres litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>56, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Pequeña)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Medio litro)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Litro)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola dos litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola 3 litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi dos litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>21,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>60, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros sabor',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo del valle',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'jugo del valle 3 litros',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC TE',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')

            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo campestre',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler tapon rojo',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>33,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo de lata',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>33,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno MK',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin dia',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>44,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin noche',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')    
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Virogrip',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>43,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Andrew',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alka selser',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>87,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>80,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Omeprazol',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Raditidina',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Diclofenac',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bioprin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>56,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Delor',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cure band',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>200,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panandol ultra',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tap-on',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Neuro fortan',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>57,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paracetamol',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolovitagia',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Loratadina',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol Mujer',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colipap',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Higado sanil',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol sinusitis',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dorival',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aspirina Forte',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'enterpmeback',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        
        DB::table('productos')->insert([
            'nombre'=>'supertiamina',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Uboprofeno',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alumin',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>112,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Amoxicilina',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol Extra',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alive',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol niño',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Losartan',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Furosemida',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol (pequeño)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol Vaso',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan barra',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>144,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan pico',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>80,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pico Tostado',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarita',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron negro',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron Blanco',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>' Pan Lengua',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla M',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>38, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla XG',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>66, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguino',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguno Chocolate',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mr Brown',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Tostado',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Principe',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sponch',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bimbolete',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panquesito',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panqueque',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>4,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paleta payaso',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panditas',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoritas',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo Blanca',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui Rosada',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>32,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Rosa',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Chocolate',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>22,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Club Social',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>32,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocomax',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz con queso',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Soda',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chips Ahoy',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla de barra ESKIMO ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno pequeño',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario mediano',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario grande',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Block',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Libreta',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario 5 Materia',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>120, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz Bic',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>96,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz zebra',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sticker',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marcadores',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Resaltador',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Borrador',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador metalico',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador Plastico',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector liquido',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector seco',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
           
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acuarela',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>4,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega grande',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Regla',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega pequeña',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado faizan ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>72,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado doña maria ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>16,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco faizan ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco tio pelon ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco sin marca',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijol de saco ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blanditos ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blandito molido ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar saco ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar empacada ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>74,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(cuarta) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>2,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(Medio) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>2,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(litro) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>2,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite Mazola galon ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>270, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite Mazola medio galon ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>135, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Nevax ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>60,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot Rindemax ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Encanto ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>123,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Rosal ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico encanto (4 unidades) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel rosal (4 unidades) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui pequeña ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>34,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui grande ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>66,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura (Grande) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Guizante  ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Elote La costeña ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Roma ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Conchitas Roma ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>17,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Milano ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina pica pica ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina sin picar ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>19,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina Calvo ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>13,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Aceite ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Agua ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Veguetales ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa China ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa soya ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca Preparada',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto churro ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>1500,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cafe presto vaso pequeño ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto vaso grande ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto 50Ml ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora vaso ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora Ceda  ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan bolsa ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Ramen ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Vaso ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>120,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bujia Philips ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar media ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>200,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar light ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta negra ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>33,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta de chapa',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>20,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Achote',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso mediano (Lisano) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso grande (Lisano)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada Grande ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea mediana ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea Grande',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marvoro ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);








        DB::table('productos')->insert([
            'nombre'=>'Marvoro (Paquete) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern (Paquete)',
            'categoria'=>'Granos basicos',
            'unidad'=>'caja',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);


        

        

        

        

        

        

        

        

        

        


    



        









    }
}
