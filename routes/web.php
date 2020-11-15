<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get', 'post'], '/', 'HomeController@login')->name('login');

Route::get('/logout', 'HomeController@logout')->name('logout');



Route::get('/backup', 'BackupController@index')->middleware('auth')->name('backup');
Route::get('/backup/guardar', 'BackupController@save')->middleware('auth')->name('backup.save');

Route::get('manualu', function () {
    return view('manualuser');
})->middleware('auth');

Route::name('estadistica.')->middleware(['auth'])->group(function () {

    Route::get(
        '/estadisticas/proveedores/fechas', 
        'EstadisticaProveedorController@Dates'
    )->name('actualizar.proveedor');


    Route::get(
        '/estadistica/proveedores', 
        'EstadisticaProveedorController@index'
        )->name('proveedores');

    Route::get(
        '/estadistica/productos', 
        'ChartController@index'
        )->name('productos');
    
    Route::get(
        '/estadisticas/productos/fechas', 
          'ChartController@Dates'
        )->name('actualizar.productos');

    Route::get(
        '/estadistica/ventas', 
        'EstadisticasVentasController@index'
         )->name('ventas');
    
    Route::get(
       '/estadisticas/ventas/fechas', 
       'EstadisticasVentasController@Dates'
        )->name('actualizar.ventas');

    

});

Route::name('pedidos.')->middleware(['auth'])->group(function () {

    Route::get(
        '/pedidos', 
        'PedidosController@getAll')
     ->name('todos');

     Route::delete(
        '/pedidos/{id}/remover',
        'PedidosController@delete'
    )->name('remover');

    Route::match(
        ['get', 'put'],
        '/pedidos/nuevo',
        'PedidosController@create'
    )->name('nuevo');
 
     Route::get(
        '/pedido/{id}/detalles',
        'PedidosController@details'
     )->name('detalles');

     Route::match(
        ['get', 'patch'],
        '/pedido/{id}/editar',
        'PedidosController@update'
    )->name('editar');
 
 });

Route::name('producto.')->middleware(['auth'])->group(function () {

    Route::get(
        '/productos',
        'ProductosController@getAll'
    )->name('todos');

    Route::get(
        '/productos/buscar',
        'ProductosController@search'
    )->name('buscar');

    Route::match(
        ['get', 'put'],
        '/productos/nuevo',
        'ProductosController@create'
    )->name('nuevo');

    Route::delete(
        '/productos/{id}/remover',
        'ProductosController@delete'
    )->name('remover');

    Route::match(
        ['get', 'patch'],
        '/productos/{id}/editar',
        'ProductosController@update'
    )->name('editar');

    Route::get(
        '/productos/{id}/proveedores',
        'ProductosController@proveedores'
    )->name('proveedores');

    Route::patch(
        '/productos/{producto_id}/proveedores/{id}/editar',
        'ProductosController@updateProveedor'
    )->name('proveedor.editar');

    Route::delete(
        '/productos/{producto_id}/proveedores/{id}/remover',
        'ProductosController@deleteProveedor'
    )->name('proveedor.remover');

    Route::put(
        '/productos/{producto_id}/proveedores/agregar',
        'ProductosController@addProveedor'
    )->name('proveedor.agregar');

});

Route::name('proveedor.')->middleware(['auth'])->group(function () {

    Route::get(
        '/proveedores',
        'ProveedoresController@getAll'
    )->name('todos');

    Route::get(
        '/proveedores/buscar',
        'ProveedoresController@search'
    )->name('buscar');

    Route::match(
        ['get', 'put'],
        '/proveedores/nuevo',
        'ProveedoresController@create'
    )->name('nuevo');

    Route::delete(
        '/proveedores/{id}/remover',
        'ProveedoresController@delete'
    )->name('remover');

    Route::match(
        ['get', 'patch'],
        '/proveedores/{id}/editar',
        'ProveedoresController@update'
    )->name('editar');
    
    Route::get(
        '/proveedores/productos',
        'ProveedoresController@products'
    )->name('productos');

});

Route::name('operarios.')->middleware(['auth'])->group(function () {

   Route::get(
       '/operarios', 
       'OperariosController@getAll')
    ->name('todos');

   Route::match(
       ['get', 'put'], 
       '/operarios/nuevo', 
       'OperariosController@create'
       )->name('nuevo');

    Route::match(
        ['get', 'patch'],
         '/operarios/{id}/editar', 
         'OperariosController@update'
         )->name('editar');

    Route::get(
        '/operarios/buscar',
        'OperariosController@search'
        )->name('buscar');
    
    Route::delete(
        '/operarios/{id}/remover',
        'OperariosController@delete'
        )->name('remover');

});

Route::name('venta.')->middleware(['auth'])->group(function () {
    
    Route::get(
        '/ventas',
        'VentasController@getAll'
    )->name('todos');

    Route::get(
        '/ventas/por',
        'VentasController@getSaleBy'
    )->name('por_tipo');

    Route::get(
        '/ventas/{tipo}/{id}/detalles',
        'VentasController@details'
    )->name('detalles');

    Route::name('contado.')->group(function () {

        Route::match(
            ['get', 'put'],
            '/ventas/contado/nuevo',
            'VentasController@createContado'
        )->name('nuevo');

    });

    Route::name('credito.')->group(function () {

        Route::match(
            ['get', 'put'],
            '/ventas/credito/nuevo',
            'VentasController@createCredito'
        )->name('nuevo');

        Route::match(
            ['get', 'put'],
            '/ventas/credito/{id}/abonar',
            'VentasController@addPayment'
        )->name('abonar');

    });

    Route::name('orden.')->group(function () {

        Route::post(
            'ventas/contado/orden/agregar',
            'VentasController@addToOrder'
        )->name('agregar');
        
        Route::get(
            'ventas/contado/orden/remover',
            'VentasController@removeFromOrder'
        )->name('remover');

        Route::get(
            '/ventas/contado/orden/buscar',
            'VentasController@searchProductOrder'
        )->name('buscar');        

    });

   

});


