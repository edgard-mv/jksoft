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

Route::get('/productos', 'ProductosController@getAll')->name('productos');

Route::get('/productos/buscar', 'ProductosController@search')->name('producto.buscar');

Route::match(
    ['get', 'put'],
    '/productos/nuevo',
    'ProductosController@create'
)->name('producto.nuevo');

Route::match(
    ['get', 'patch'],
    '/productos/{id}/editar',
    'ProductosController@update'
)->name('producto.editar');

Route::get(
    '/productos/{id}/proveedores',
    'ProductosController@proveedores'
)->name('producto.proveedores');

Route::match(
    ['get', 'patch'],
    '/productos/{producto_id}/proveedores/{id}/editar',
    'ProductosController@updateProveedor'
)->name('producto.proveedor.editar');

Route::delete(
    '/productos/{producto_id}/proveedores/{id}/remover',
    'ProductosController@deleteProveedor'
)->name('producto.proveedor.remover');

Route::put(
    '/productos/{producto_id}/proveedores/agregar',
    'ProductosController@addProveedor'
)->name('producto.proveedor.agregar');

Route::get('/proveedores', 'ProveedoresController@getAll')->name('proveedores');

Route::get('/proveedores/data', 'ProveedoresController@getAllJSON')->name('proveedores.json');

Route::get('/proveedores/buscar', 'ProveedoresController@search')->name('proveedor.buscar');

Route::match(['get', 'put'], '/proveedores/nuevo', 'ProveedoresController@create')->name('proveedor.nuevo');

Route::match(['get', 'patch'], '/proveedores/{id}/editar', 'ProveedoresController@update')->name('proveedor.editar');

Route::get('/operarios', 'OperariosController@getAll')->name('operarios');

Route::match(['get', 'put'], '/operarios/nuevo', 'OperariosController@create')->name('operarios.nuevo');

Route::match(['get', 'patch'], '/operarios/{id}/editar', 'OperariosController@update')->name('operarios.editar');

Route::get('/operarios/buscar', 'OperariosController@search')->name('operario.buscar');



Route::get('ventas', function () {
    return view('ventas.venta');
});

Route::get('contado', function () {
    return view('ventas.contado');
});

Route::get('credito', function () {
    return view('ventas.credito');
});

Route::get('detallec', function () {
    return view('ventas.detalles_contado');
});

Route::get('detallecr', function () {
    return view('ventas.detalles_credito');
});
