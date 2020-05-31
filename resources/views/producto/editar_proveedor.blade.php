@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Editar datos del proveedor')
@section('content')


<div  class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <form action="{{ route('producto.proveedor.editar', ['id' => $proveedor->id, 'producto_id' => $producto->id]) }}" method="post">
            @csrf
            @method('PATCH')
            Empresa: {{ $proveedor->empresa }}
            <br>
            Nombre: {{ $proveedor->nombre }}
            <br>

            <div class="form-group">
                <strong><label for="cantidad">Cantidad del producto</label></strong>
                <input type="number" value="{{ $proveedor->cantidad }}" class="form-control"  autocomplete="off" name="cantidad">
            </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>



@endsection