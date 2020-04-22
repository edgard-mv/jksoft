@extends('menu')
@section('titulo',"Inicio")
@section('content')


<div class="container my-4">

<p class="font-weight-bold">Presentación de datos específicos obtenidos por medio del inventario y registro de ventas realizadas.</p>

<hr class="my-5">

<h2 class="my-5 h2">Datos generales</h2>

<div class="card-columns text-light">
  <div class="card mt-2 mb-3 bg-success">
    <div class="card-body">
      <h5 class="card-title">Producto con mayor stock</h5>
      <ul><li>
      <p>Nombre del producto.</p></li>
      <li><p>Stock: </p></li></ul>
    </div>
  </div>
  
  <div class="card p-3 text-center mt-2 mb-3 border-info text-info">
    <blockquote class="blockquote mb-0 ">
      <p>Cantidad de ventas al contado: </p>
    </blockquote>
  </div>

  <div class="card mb-3 bg-success">
    <div class="card-body">
    <h5 class="card-title">Operario con mayores horas laboradas</h5>
      <ul><li>
      <p>Nombre del operario</p></li>
      <li><p>Cantidad de horas: </p></li></ul>
    </div>
  </div>

  <div class="card border-success text-secondary p-3 mt-2 mb-3">
    <blockquote class="blockquote mb-0">
      <h5><p>Venta con mayor monto total</p></h5>
      <ul><li>
      <p><small>Monto total:</small></p></li>
      <li><p><small>Cantidad de poductos vendidos:</small> </p></li>
      <li><p><small>Fecha: </small></p></li></ul>
      <p>  </p>
      <h5><p>Venta con menor monto total</p></h5>
      <ul><li>
      <p><small>Monto total:</small></p></li>
      <li><p><small>Cantidad de poductos vendidos: </small></p></li>
      <li><p><small>Fecha:</small> </p></li></ul>
    </blockquote>
  </div>

  <div class="card mt-2 mb-3 bg-secondary">
    <div class="card-body">
    <h5 class="card-title">Producto con menor stock</h5>
      <ul><li>
      <p>Nombre del producto.</p></li>
      <li><p>Stock: </p></li></ul>
    </div>
  </div>

  <div class="card p-3 text-center mt-2 mb-3 border-info text-info">
    <blockquote class="blockquote mb-0">
      <p>Cantidad de ventas al crédito: </p>
    </blockquote>
  </div>

  <div class="card mb-3 bg-secondary">
    <div class="card-body">
    <h5 class="card-title">Operario con menos horas laboradas</h5>
      <ul><li>
      <p>Nombre del operario</p></li>
      <li><p>Cantidad de horas: </p></li></ul>
    </div>
  </div>

</div>

</div>

@endsection
