@extends('menu')
@section('titulo','Ventas')
@if (empty($type))
    @section('pagetitle','Lista de ventas realizadas')
@elseif ($type == 'contado')
    @section('pagetitle','Lista de ventas al contado')
@elseif ($type == 'credito')
    @section('pagetitle','Lista de ventas al crédito')
@endif
@section('content')

{{-- <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('ventas.buscar_v')
    </div> 
</div> --}}

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive">
            <div class="container-fluid">
                <div id="toolbar">
                    <a class="btn btn-success" href="{{ route('venta.credito.nuevo') }}">
                        <span class="fas fa-plus-square"></span>
                        <strong>Crédito</strong>
                    </a>
                    <a class="btn btn-primary" href="{{ route('venta.contado.nuevo') }}">
                        <span class="fas fa-plus-square"></span>
                        <strong>Contado</strong>
                    </a>    
                </div>
                <table id="Selltable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px"
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
                            <th class="align-middle" data-sortable="true">N⁰</th>
                            <th class="align-middle" data-sortable="true" data-searchable="false">Fecha</th>
                            <th data-field="tipo" data-filter-control="select">Tipo</th>
                            <th class="align-middle">Monto total</th>
                            <th data-field="estado" data-filter-control="select">Estado</th>
                            <th class="align-middle" data-searchable="false">Acción</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ventas as $venta)
                            <tr style="text-align:center; color: rgb(14,14,14);background-color: #CDE4F7;">
                                <td>{{ $venta->id }}</td>
                                <td>{{ $venta->fecha }}</td>
                                @if ($venta->tipo == 'contado')
                                    <td>Contado</td>
                                @elseif ($venta->tipo == 'credito')
                                    <td>Crédito</td>
                                @endif
                                <td>
                                    @money($venta->monto_total)
                                </td>
                                <td>{{ $venta->estado }}</td>
                                <td style="text-align:center">
                                    <a href="{{ route('venta.detalles', ['tipo' => $venta->tipo, 'id' => $venta->id]) }}" class="btn btn-warning">
                                        <span class="fas fa-info-circle"></span>
                                        <strong>Detalles</strong>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection