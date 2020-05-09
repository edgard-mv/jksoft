@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Nuevo Proveedor')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="{{ route('proveedor.nuevo') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <strong><label for="empresa">Nombre de la empresa proveedora</label></strong>
                    <input type="text" class="form-control" autocomplete="off" name="empresa">
                </div>

                <div class="form-group">
                    <strong><label for="nombre">Nombre del trabajador de la empresa</label></strong>
                    <input type="text" class="form-control"  autocomplete="off" name="nombre" >
                </div>

                <div class="form-group" style="text-align:center">
                    <button class="btn btn-primary" type="submit">
                        <span class="fas fa-save"></span>
                        <strong>Guardar</strong>
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">
                        <span class="fas fa-window-close"></span>
                        <strong>Cancelar</strong>
                    </a>
                </div>
            </form>
        </div>
    </div>




@endsection