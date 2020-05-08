@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Lista de productos')
@section('content')
@include('producto.modal_delete')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('producto.buscar')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center text-info bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Stock</th>
                <th>Empresa Proveedora</th>
                <th>Cantidad proveida</th>
                <th>Fecha</th>
                <th>Precio por unidad</th>
                <th>Acciones</th>
            </thead>

            @foreach ($productos as $producto)
            <tr style="color: rgb(14,14,14);background-color: rgba(79,189,227,0.3);filter: contrast(82%);">
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <ul>
                        @foreach ($producto->proveedores as $proveedor)
                            <li>{{ $proveedor->empresa }}</li>
                        @endforeach    
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach ($producto->proveedores as $proveedor)
                            <li>{{ $proveedor->cantidad }}</li>
                        @endforeach    
                    </ul>
                </td>
                <td>{{ date('Y-m-d', strtotime($producto->updated_at)) }}</td>
                <td>{{ $producto->precio }}</td>
                <td style="text-align:center">
                    <div class="input-group-btn">
                        <a href="{{ route('producto.editar', ['id' => $producto->id]) }}"><button class="btn btn-warning">Editar</button></a>
                        <a data-toggle="modal" data-target="#ModalDelete"><button class="btn btn-danger">Eliminar</button></a>
                        <a href="{{ route('producto.proveedores', ['id' => $producto->id]) }}"><button class="btn btn-primary">Proveedores</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
         </table>
    </div>
</div>

@endsection