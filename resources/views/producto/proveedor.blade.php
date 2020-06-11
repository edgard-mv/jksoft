@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Lista de los proveedores')
@section('content')
@include('producto.modal_add_proveedor')



<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="{{ route('producto.todos') }}">
                        <button type="button" class="btn btn-danger">
                            <span class="fas fa-arrow-left"></span>
                        </button>
                    </a>
                    <a data-target="#ModalAddProveedor" data-toggle="modal">
                        <button class="btn btn-success">
                            <span class="fas fa-plus-square"></span>
                            Agregar
                        </button>
                    </a>
                </span>
            </div>
        </div>
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover"  style="border-collapse: separate;">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Empresa Proveedora</th>
                <th>Nombre del trabajador de la empresa</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </thead>

            @foreach ($proveedores as $proveedor)
            @include('producto.modal_delete_proveedor')
            <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">                    
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->empresa }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->cantidad }}</td>
                <td style="text-align:center">
                    <a href="{{ route('producto.proveedor.editar', ['id' => $proveedor->id, 'producto_id' => $producto->id]) }}">
                        <button class="btn btn-warning">
                            <span class="fas fa-pencil-alt"></span>
                        </button>
                    </a>
                    <a href="" data-target="#ModalDeleteProveedor{{ $proveedor->id }}" data-toggle="modal">
                        <button class="btn btn-danger">
                            <span class="fas fa-trash-alt"></span>
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
         </table>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-btn" >
                </span>
            </div>
        </div>
    </div> 
</div>

@endsection