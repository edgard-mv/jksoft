@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Lista de productos')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('producto.buscar')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table id="producttable" class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Stock</th>
                <th>Empresa Proveedora</th>
                <th>Cantidad proveida</th>
                <th>Fecha</th>
                <th>Precio por unidad</th>
                <th>Acciones</th>
            </thead>

            <tbody  >
            @foreach ($productos as $producto)
            @include('producto.modal_delete')
            <tr style="color: rgb(14,14,14);background-color: #CDE4F7;">
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td style="text-align:center">{{ $producto->cantidad }}</td>
                <td>
                    <ul>
                        @foreach ($producto->proveedores as $proveedor)
                            <li>{{ $proveedor->empresa }}</li>
                        @endforeach    
                    </ul>
                </td>
                <td >
                    <ul>
                        @foreach ($producto->proveedores as $proveedor)
                            <li>{{ $proveedor->cantidad }}</li>
                        @endforeach    
                    </ul>
                </td>
                <td>{{ date('Y-m-d', strtotime($producto->updated_at)) }}</td>
                <td style="text-align:center">{{ $producto->precio }}</td>
                <td style="text-align:center">
                    <div class="input-group-btn">
                        <a href="{{ route('producto.editar', ['id' => $producto->id]) }}">
                            <button class="btn btn btn-warning">
                                <span class="fas fa-pencil-alt"></span>
                            </button>
                        </a>
                        <a href="{{ route('producto.proveedores', ['id' => $producto->id]) }}">
                            <button class="btn btn-primary">
                                <span class="fas fa-list-ul"></span>
                            </button>
                        </a>
                        <a data-toggle="modal" data-target="#ModalDelete{{ $producto->id }}">
                            <button class="btn btn-danger">
                                <span class="fas fa-trash-alt"></span>
                            </button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
         </table>
    </div>
</div>

<div style="margin-top: 5px">
<span class="badge badge-pill badge-warning">Editar datos del producto</span>
<span class="badge badge-pill badge-primary" style="margin-left: 5px">Editar datos del proveedor</span>
</div>


@endsection