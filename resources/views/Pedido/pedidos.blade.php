@extends('menu')
@section('titulo','Pedidos')
@section('pagetitle','Lista de pedidos')
@section('content')


<a class="btn btn-success" href="{{ route('pedidos.nuevo') }}">
    <span class="fas fa-plus-square"></span>
    <strong>Nuevo</strong>
</a>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive">
            <div class="container-fluid">
                <table id="producttable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px">
                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                        <th>ID</th>
                        <th>Trabajador solicitante</th>
                        <th>Cantidad de productos solicitados</th>
                        <th>Total a pagar</th>
                        <th>Estado del pedido</th>
                        <th>Acciones</th>
                    </thead>

                    <tbody>

                    @foreach ($pedidos as $pedido)
                    @include('Pedido.modal_delete')
                    <tr style="text-align:center; color: rgb(14,14,14);background-color: #CDE4F7;">
                        <td>{{ $pedido->id }}</td>
                            <td style="text-align:left">
                                {{ $pedido->trabajador->nombre}}
                            </td>
                            <td style="text-align:center">{{ $pedido->cantidad_total}}</td>
                            <td style="text-align:center">@money($pedido->monto_total)</td>
                            <td style="text-align:center">{{$pedido->estado}}</td>
                            <td>
                                <div class="input-group-btn">
                                   <a href="{{ route('pedidos.editar', ['id' => $pedido->id]) }}"> 
                                        <button class="btn btn btn-warning">
                                            <span class="fas fa-pencil-alt"></span>
                                        </button>
                                    </a>
                                   <a href="{{ route('pedidos.detalles', ['id' => $pedido->id]) }}">
                                        <button class="btn btn-primary">
                                            <span class="fas fa-list-ul"> Detalles</span>
                                        </button>
                                    </a>

                                    <a data-toggle="modal" data-target="#ModalDelete{{ $pedido->id }}">
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
    <span class="badge badge-pill badge-warning"> <span class="fas fa-pencil-alt"></span> Editar datos del pedido</span>
    <span class="badge badge-pill badge-primary" style="margin-left: 5px"> <span class="fas fa-list-ul"></span> Cancelar</span>
</div>






@endsection