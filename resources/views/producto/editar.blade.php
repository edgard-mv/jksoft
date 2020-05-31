@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Editar datos del producto')
@section('content')

<div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="{{ route('producto.editar', ['id' => $producto->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <strong><label for="nombre">Nombre del producto</label></strong>
              <input type="text" value="{{ $producto->nombre }}" class="form-control" autocomplete="off" name="nombre">
            </div>

            <div class="form-group">
              <strong><label for="cantidad">Stock</label></strong>
              <input type="number" value="{{ $producto->cantidad }}" class="form-control" autocomplete="off" name="cantidad">
            </div>

            {{-- @foreach ($producto->proveedores as $proveedor)
            <br>
              <div class="form-group">
                <strong><label for="empresa">Empresa proveedora</label></strong>
                <input type="text" value="{{ $proveedor->empresa }}" class="form-control" autocomplete="off" name="empresaproveedora">
              </div>

              <div class="form-group">
                  <strong><label for="cantidadproveida">Cantidad del producto</label></strong>
                  <input type="number" value="{{ $proveedor->cantidad }}" class="form-control"  autocomplete="off" name="cantidadproveida"  >
              </div>
              <br>
            @endforeach --}}

            <div class="form-group">
              <strong><label for="fecha">Fecha de la provisión</label></strong>
              <input type="date"  value="{{ $producto->updated_at->format("Y-m-d") }}" class="form-control" autocomplete="off" name="fecha">
            </div>

            <div class="form-group">
                <strong><label for="precio">Precio por unidad del producto</label></strong>
                <input type="number" value="{{ $producto->precio }}" class="form-control"  autocomplete="off" name="precio" >
           </div>
                                    
            <div class="form-group" style="text-align:center">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            </div>
          </form>
        </div>
    </div>



@endsection