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

Route::get('/', 'HomeController@index')->name('inicio');

Route::name('producto.')->group(function () {

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

Route::name('proveedor.')->group(function () {

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

});

Route::get('/operarios', 'OperariosController@getAll')->name('operarios');

Route::match(['get', 'put'], '/operarios/nuevo', 'OperariosController@create')->name('operarios.nuevo');

Route::match(['get', 'patch'], '/operarios/{id}/editar', 'OperariosController@update')->name('operarios.editar');

Route::get('/operarios/buscar', 'OperariosController@search')->name('operario.buscar');

Route::name('venta.')->group(function () {
    
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

        Route::name('orden.')->group(function () {

            Route::post(
                'ventas/contado/orden/agregar/{id}',
                'VentasController@addToOrder'
            )->name('agregar');
            
            Route::post(
                'ventas/contado/orden/remover/{id}',
                'VentasController@removeFromOrder'
            )->name('remover');

        });

    });

});

Route::get('credito', function () {
    return view('ventas.credito');
});
