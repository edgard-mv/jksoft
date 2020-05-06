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

Route::get('crear_p', function () {
    return view('producto.crear');
});

Route::match(['get', 'patch'], '/productos/{id}/editar', 'ProductosController@update')->name('producto.editar');

Route::get('/proveedores', 'ProveedoresController@getAll')->name('proveedores');

Route::get('/proveedores/buscar', 'ProveedoresController@search')->name('proveedor.buscar');

Route::match(['get', 'put'], '/proveedores/nuevo', 'ProveedoresController@create')->name('proveedor.nuevo');

Route::match(['get', 'patch'], '/proveedores/{id}/editar', 'ProveedoresController@update')->name('proveedor.editar');

Route::get('operarios', function () {
    return view('operarios.operario');
});

Route::get('editar_op', function () {
    return view('operarios.editar_o');
});

Route::get('nuevo_op', function () {
    return view('operarios.nuevo_op');
});

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
