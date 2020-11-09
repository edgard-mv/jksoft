@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Lista de proveedores')
@section('content')


{{-- <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('proveedores.buscar_p')
    </div> 
</div> --}}

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive" >
            <div class="container-fluid">
                <div id="toolbar">
                    <a class="btn btn-success" href="{{ route('proveedor.nuevo') }}">
                        <span class="fas fa-plus-square"></span>
                        <strong>Nuevo</strong>
                    </a>
                </div>
                <table id="proveetable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;"
                    data-toggle="table"
                    data-search="true"
                    data-show-columns="false"
                    data-pagination="true"
                    data-show-search-clear-button="true"
                    data-search-align="left"
                    data-toolbar="#toolbar"
                    data-toolbar-align="right"
                    data-buttons-class="dark"
                    data-locale="es-ES">
                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                        <th class="align-middle" data-sortable="true">ID</th>
                        <th class="align-middle" data-sortable="true">Empresa Proveedora</th>
                        <th class="align-middle" data-sortable="true">Nombre del trabajador de la empresa</th>
                        <th class="align-middle" data-searchable="false">Acciones</th>
                    </thead>

                    @foreach ($proveedores as $proveedor)
                    @include('proveedores.modal_delete')
                        <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">                    
                            <td style="text-align:center">{{ $proveedor->id }}</td>
                            <td>{{ $proveedor->empresa }}</td>
                            <td>{{ $proveedor->nombre }}</td>
                            <td style="text-align:center">
                                <a href="{{ route('proveedor.editar', ['id' => $proveedor->id]) }}">
                                    <button class="btn btn-warning">
                                        <span class="fas fa-pencil-alt"></span>
                                    </button>
                                </a>
                                <a href="" data-target="#ModalDelete{{ $proveedor->id }}" data-toggle="modal">
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
    </div>
</div>    

@endsection