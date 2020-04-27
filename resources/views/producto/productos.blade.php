@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Lista de productos')
@section('content')
@include('producto.modal')


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
                    <th>Nombre del producto</th>
                    <th>Stock</th>
                    <th>Empresa Proveedora</th>
                    <th>Cantidad proveida</th>
                    <th>Fecha</th>
                    <th>Precio por unidad</th>
                    <th>Acciones</th>
            
            </thead>

            <tr style="color: rgb(14,14,14);background-color: rgba(79,189,227,0.3);filter: contrast(82%);">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:center">
                        <a href="/editar_p"><button class="btn btn-warning">Editar</button></a>
                        <a href="" data-toggle="modal" data-target="#modal-delete"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
            </tr>
         </table>
    </div>
</div>

@endsection