@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Nuevo Producto')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="{{ route('producto.nuevo') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <strong><label for="nombre">Nombre del producto</label></strong>
                    <input type="text" class="form-control" autocomplete="off" name="nombre">
                </div>
    
                <div class="form-group">
                    <strong><label for="precio">Precio por unidad del producto</label></strong>
                    <input type="number" class="form-control"  autocomplete="off" name="precio" >
               </div>
                                
                <div class="form-group">
                    <strong><label for="cantidad">Cantidad proveida</label></strong>                             
                    <input type="number" class="form-control"  autocomplete="off" name="cantidad">
                </div>
                               
                <div class="form-group">
                    <strong><label for="proveedores">Elige un proveedor</label></strong>
                    <select class="form-control" name="proveedor_id" id="proveedores">
                        @foreach ($proveedoresDisponibles as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->empresa }}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="form-group">
                    <strong><label for="fecha">Fecha de la provisión</label></strong>
                    <input type="date" name="fecha" value="{{ date('Y-m-d', strtotime($fecha)) }}" class="form-control" autocomplete="off">
                </div>
    
                <div class="form-group" style="text-align:center">
                    <button class="btn btn-primary" type="submit">
                        <span class="fas fa-save"></span>
                        <strong>Guardar</strong>
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">
                        <span class="fas fa-times"></span>
                        <strong>Cancelar</strong></a>
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection