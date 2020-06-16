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

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('ventas.buscar_v')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>N⁰</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Monto total</th>
                <th>Estado</th>
                <th>Acción</th>
            
            </thead>

            <tbody>
                @foreach ($ventas as $venta)
                    <tr style="text-align:center; color: rgb(14,14,14);background-color: #CDE4F7;">
                        <td>{{ $venta->id }}</td>
                        <td>{{ $venta->fecha }}</td>
                        <td>{{ $venta->tipo }}</td>
                        <td>
                            @money($venta->monto_total)
                        </td>
                        <td>{{ $venta->estado }}</td>
                        <td style="text-align:center">
                            <a href="/detallecr" class="btn btn-warning">
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

@endsection