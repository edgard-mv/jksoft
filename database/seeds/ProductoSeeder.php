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
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')        
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Protex',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Palmolive',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'DK12',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Doña blanca(jabon pequeño)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(grande)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rinzo(pequeño)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>36,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro nica',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>120,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Magia Blanca',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>180,
            'precio'=>7, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavisimo',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>120,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Rojo)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>24,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Suavitel (Verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>12,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>36,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP',
            'categoria'=>'Carnes y Embutidos',
            'unidad'=>'bolsa',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pollo TIPTOP(Pechuga)',
            'categoria'=>'Carnes y Embutidos',
            'unidad'=>'bolsa',
            'cantidad'=>25,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Carne San Martin',
            'categoria'=>'Carnes y Embutidos',
            'unidad'=>'bolsa',
            'cantidad'=>30,
            'precio'=>76, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Menudo TIPTOP',
            'categoria'=>'Carnes y Embutidos',
            'unidad'=>'bolsa',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Terzo',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin(Botella Morado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azistin (Botella Verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>5,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro Botella',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cloro botella(Morado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>4,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cloro botella(Verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>5,
            'precio'=>27, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinesol',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>10,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>26,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Polvo)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Vanish(Botella)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'botella',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Trasparente)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza lata toña',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>100,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cerveza Litro Toña',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>120,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Rosado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(Blanco)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>9,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Marfil(con bicarbonato)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Blanco)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>15,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Jabon bex (Transparente)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>6,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Ultra)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>33,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Azul)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>7,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon bex(Rosado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(pequeño)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>50,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Grande)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Maravilla(Azul)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>35,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(verde)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>12,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Blanco)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jabon Extra(Rosado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>30,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>72,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ultra clin (Grande)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>14,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espumil(Rosado)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>50,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex ',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>34,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Xedex(Grande)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>14,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Escobas',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'paquete (n)',
            'cantidad'=>12,
            'precio'=>64, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lampaso',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'paquete (n)',
            'cantidad'=>6,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>18,
            'precio'=>48, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mecha de lampaso XL',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'bolsa',
            'cantidad'=>8,
            'precio'=>70, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Triple Accion',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>30, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate Doble Accion',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>42,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colgate(Pequeña)',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oral B',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Clasico',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>72,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes Premiun',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>24,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cepillo de Dientes para niños',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'caja',
            'cantidad'=>14,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Medio litro',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'bolsa',
            'cantidad'=>30,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche litro',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'bolsa',
            'cantidad'=>20,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche Taza',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'bolsa',
            'cantidad'=>15,
            'precio'=>11, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocolita',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'bolsa',
            'cantidad'=>15,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Leche Fresa',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'bolsa',
            'cantidad'=>8,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola 12onza',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>48,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Medio litro',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>72,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Litro',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>48,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola litro y medio',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>26,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Dos litros (Retornable)',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>36,
            'precio'=>35, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Coca Cola Tres litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>15,
            'precio'=>56, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Pequeña)',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>60,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);


        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Medio litro)',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>26,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola(Litro)',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>20,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola dos litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>12,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')       
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Big Cola 3 litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>10,
            'precio'=>45, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>40,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi litro',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>14,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi dos litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>21,
            'precio'=>28, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>10,
            'precio'=>60, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi tres litros sabor',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>15,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo del valle',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'jugo del valle 3 litros',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>5,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'caja',
            'cantidad'=>26,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'HIC TE',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'caja',
            'cantidad'=>10,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')

            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo campestre',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>8,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cola Shaler tapon rojo',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'botella',
            'cantidad'=>33,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jugo de lata',
            'categoria'=>'Zumos y Bebidas',
            'unidad'=>'lata',
            'cantidad'=>33,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>120,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acetominofeno MK',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>60,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin dia',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>44,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tacsin noche',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>40,
            'precio'=>9, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')    
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Virogrip',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>24,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pepsi medio litro',
            'categoria'=>'Cosmeticos',
            'unidad'=>'botella',
            'cantidad'=>24,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>43,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Andrew',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alka selser',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>87,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>80,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Omeprazol',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Raditidina',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Diclofenac',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bioprin',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>56,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Delor',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cure band',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>200,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panandol ultra',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tap-on',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>48,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Neuro fortan',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>57,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paracetamol',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolofin',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dolovitagia',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Loratadina',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>30,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sukrol Mujer',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Colipap',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>30,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Higado sanil',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol sinusitis',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Dorival',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>8, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aspirina Forte',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'enterpmeback',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>60,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        
        DB::table('productos')->insert([
            'nombre'=>'supertiamina',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>3, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Uboprofeno',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alumin',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>112,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Amoxicilina',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol Extra',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Alive',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>36,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panadol niño',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Losartan',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>50,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Furosemida',
            'categoria'=>'Cosmeticos',
            'unidad'=>'blister (n)',
            'cantidad'=>100,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol (pequeño)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'vaso',
            'cantidad'=>30,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Zepol Vaso',
            'categoria'=>'Cosmeticos',
            'unidad'=>'vaso',
            'cantidad'=>40,
            'precio'=>50, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan barra',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>144,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan pico',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>80,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pico Tostado',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>50,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarita',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron negro',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoron Blanco',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>40,
            'precio'=>2, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>' Pan Lengua',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>1, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla M',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>10,
            'precio'=>38, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Bimbo talla XG',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>7,
            'precio'=>66, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguino',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pinguno Chocolate',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>8,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mr Brown',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>20,
            'precio'=>21, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pan Tostado',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>10,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Principe',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>7,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sponch',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>10,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bimbolete',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>14,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panquesito',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>12,
            'precio'=>19, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panqueque',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>4,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Paleta payaso',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Panditas',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>6,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Polvoritas',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'bolsa',
            'cantidad'=>6,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Oreo Blanca',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chiqui Rosada',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>32,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Rosa',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Can Can Chocolate',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>22,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Club Social',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>32,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chocomax',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>60,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Ritz con queso',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>30,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Soda',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Chips Ahoy',
            'categoria'=>'Panadería y Dulces',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mantequilla de barra ESKIMO ',
            'categoria'=>'Huevos y Lacteos',
            'unidad'=>'paquete (n)',
            'cantidad'=>20,
            'precio'=>40, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno pequeño',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>20,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>15,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario mediano',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>15,
            'precio'=>17, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario grande',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>15,
            'precio'=>32, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Block',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>15,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Libreta',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>24, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cuaderno universitario 5 Materia',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>120, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz Bic',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>96,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Lapiz zebra',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>36,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sticker',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marcadores',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>40,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Resaltador',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Borrador',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador metalico',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>30,
            'precio'=>5, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Tajador Plastico',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>20,
            'precio'=>4, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector liquido',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Corrector seco',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>7,
            'precio'=>34, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
           
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acuarela',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>4,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega grande',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>8,
            'precio'=>55, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Regla',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>30,
            'precio'=>10, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pega pequeña',
            'categoria'=>'Infantil',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado faizan ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>72,
            'precio'=>16, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz empacado doña maria ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>16,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco faizan ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco tio pelon ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>1,
            'precio'=>13, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Arroz saco sin marca',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijol de saco ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>1,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blanditos ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>14,
            'precio'=>18, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Frijoles blandito molido ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>15,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar saco ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>1,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Azucar empacada ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>74,
            'precio'=>15, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(cuarta) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>2,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(Medio) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>2,
            'precio'=>20, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite chorreado(litro) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
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
            'categoria'=>'caja',
            'unidad'=>'paquete (n)',
            'cantidad'=>5,
            'precio'=>135, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Nevax ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>120,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);
        
        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>60,
            'precio'=>22, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Scot Rindemax ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>25,
            'precio'=>25, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Encanto ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>123,
            'precio'=>26, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico Rosal ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>120,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel Higienico encanto (4 unidades) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>80, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Papel rosal (4 unidades) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui pequeña ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>34,
            'precio'=>6, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sopa Magui grande ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>66,
            'precio'=>12, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>14, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa de tomate Natura (Grande) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>10,
            'precio'=>36, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Guizante  ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>7,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Elote La costeña ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Roma ',
            'categoria'=>'Aceite, Pasta y Legumbres',
            'unidad'=>'paquete (n)',
            'cantidad'=>30,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Conchitas Roma ',
            'categoria'=>'Aceite, Pasta y Legumbres',
            'unidad'=>'paquete (n)',
            'cantidad'=>17,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Espagueti Milano ',
            'categoria'=>'Aceite, Pasta y Legumbres',
            'unidad'=>'paquete (n)',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina pica pica ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>16,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina sin picar ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>19,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Sardina Calvo ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>13,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Aceite ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Agua ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Atun gaiota Veguetales ',
            'categoria'=>'Mariscos',
            'unidad'=>'lata',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa China ',
            'categoria'=>'Granos basicos',
            'unidad'=>'botella',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa soya ',
            'categoria'=>'Granos basicos',
            'unidad'=>'botella',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maseca Preparada',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto churro ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>1500,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'cafe presto vaso pequeño ',
            'categoria'=>'Granos basicos',
            'unidad'=>'bolsa',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto vaso grande ',
            'categoria'=>'Granos basicos',
            'unidad'=>'vaso',
            'cantidad'=>5,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cafe presto 50Ml ',
            'categoria'=>'Granos basicos',
            'unidad'=>'vaso',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora vaso ',
            'categoria'=>'Granos basicos',
            'unidad'=>'vaso',
            'cantidad'=>15,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Cremora Ceda  ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan bolsa ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'bolsa',
            'cantidad'=>100,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Ramen ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'bolsa',
            'cantidad'=>50,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Maruchan Vaso ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'bolsa',
            'cantidad'=>120,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Bujia Philips ',
            'categoria'=>'Hogar y Limpieza',
            'unidad'=>'paquete (n)',
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
            'unidad'=>'paquete (n)',
            'cantidad'=>200,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Margarina Numar light ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta negra ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>33,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pimienta de chapa',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>20,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Achote',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'paquete (n)',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa ',
            'categoria'=>'Granos basicos',
            'unidad'=>'paquete (n)',
            'cantidad'=>40,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso mediano (Lisano) ',
            'categoria'=>'Granos basicos',
            'unidad'=>'vaso',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Salsa inglesa vaso grande (Lisano)',
            'categoria'=>'Granos basicos',
            'unidad'=>'vaso',
            'cantidad'=>8,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'vaso',
            'cantidad'=>25,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')     
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Leche condensada Grande ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'vaso',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'vaso',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea mediana ',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'vaso',
            'cantidad'=>9,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Jalea Grande',
            'categoria'=>'Conservas y Comida Preparada',
            'unidad'=>'vaso',
            'cantidad'=>10,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Marvoro ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);








        DB::table('productos')->insert([
            'nombre'=>'Marvoro (Paquete) ',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Verde XL (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Pall Mall Azul XL (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>28,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Suave (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>24,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Casino Rojo (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>14,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont suave (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>26,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Belmont Rojo (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>12,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Rolis (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Mordern (Paquete)',
            'categoria'=>'Cosmeticos',
            'unidad'=>'paquete (n)',
            'cantidad'=>48,
            'precio'=>44, 'created_at'=>Carbon::now()->format('Y-m-d'), 'updated_at'=>Carbon::now()->format('Y-m-d')      
            
        ]);


        

        

        

        

        

        

        

        

        

        


    



        









    }
}
