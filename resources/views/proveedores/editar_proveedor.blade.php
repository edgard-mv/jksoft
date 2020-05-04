@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Editar datos del proveedor')
@section('content')


<div  class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <form action="{{ route('proveedor.editar', ['id' => $proveedor->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <strong><label for="empresa">Nombre de la empresa proveedora</label></strong>
                <input type="text" value="{{ $proveedor->empresa }}" class="form-control" autocomplete="off" name="empresa">
            </div>

            <div class="form-group">
                <strong><label for="nombre">Nombre del proveedor de la empresa</label></strong>
                <input type="text" value="{{ $proveedor->nombre }}" class="form-control"  autocomplete="off" name="nombre" >
            </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</div>



@endsection