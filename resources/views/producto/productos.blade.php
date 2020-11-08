@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Lista de productos')
@section('content')


{{-- <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('producto.buscar')
    </div> 
</div> --}}

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive">
            <div class="container-fluid">
                <div id="toolbar">
                    <a class="btn btn-success" href="{{ route('producto.nuevo') }}" style="margin-left:650px">
                        <span class="fas fa-plus-square"></span>
                        <strong>Nuevo</strong>
                    </a>
                </div>
                <table id="producttable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px"
                    data-toggle="table"
                    data-search="true"
                    data-show-columns="false"
                    data-pagination="true"
                    data-filter-control="true"
                    data-show-search-clear-button="true"
                    data-search-align="left"
                    data-toolbar="#toolbar"
                    data-toolbar-align="right"
                    data-buttons-class="dark"
                    data-locale="es-ES">
                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                        <tr>
                            <th class="align-middle" data-sortable="true">ID</th>
                            <th class="align-middle" data-sortable="true">Nombre del producto</th>
                            <th class="align-middle" data-searchable="false">Stock</th>
                            <th data-field="categoria" data-filter-control="select">Categoría</th>
                            <th class="align-middle">Empresa Proveedora</th>
                            <th class="align-middle" data-searchable="false" data-sortable="true">Fecha</th>
                            <th class="align-middle" data-searchable="false">Precio por unidad</th>
                            <th class="align-middle" data-searchable="false">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($productos as $producto)
                    @include('producto.modal_delete')
                    <tr style="text-align:center; color: rgb(14,14,14);background-color: #CDE4F7;">
                        <td>{{ $producto->id }}</td>
                            <td style="text-align:left">
                                {{ $producto->nombre }}
                            </td>
                            <td style="text-align:center">{{ $producto->cantidad. ' ' . $producto->unidad }}(s).</td>
                            <td>{{ $producto->categoria }}</td>
                            <td style="text-align:left">
                                <ul>
                                    @foreach ($producto->proveedores as $proveedor)
                                        <li>{{ $proveedor->empresa }}</li>
                                    @endforeach    
                                </ul>
                            </td>
                            <td>{{ date('Y-m-d', strtotime($producto->updated_at)) }}</td>
                            <td>@money($producto->precio)</td>
                            <td>
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
    </div>
</div>

<div style="margin-top: 5px" >
    <span class="badge badge-pill badge-warning"> <span class="fas fa-pencil-alt"></span> Editar datos del producto</span>
    <span class="badge badge-pill badge-primary" style="margin-left: 5px"> <span class="fas fa-list-ul"></span> Editar datos del proveedor</span>
</div>

@endsection