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

Route::get('/', 'HomeController@index');

Route::get('producto', function () {
    return view('producto.productos');
});

Route::get('crear_p', function () {
    return view('producto.crear');
});

Route::get('editar_p', function () {
    return view('producto.editar');
});

Route::get('proveedores', function () {
    return view('proveedores.proveedor');
});

Route::get('editar_pr', function () {
    return view('proveedores.editar_proveedor');
});

Route::get('nuevo_pr', function () {
    return view('proveedores.nuevo_proveedor');
});

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
