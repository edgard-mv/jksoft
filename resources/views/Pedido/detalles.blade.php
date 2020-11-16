@extends('menu')
@section('titulo','Pedidos')
@section('pagetitle','Detalles de pedido N° ' . $pedido->id )
@section('content')
    <div style="margin-left:2px" class="row">
        <a href="{{ url()->previous() }}" class="btn btn-danger">
            <span class="fas fa-arrow-left"></span>
            <strong>Regresar</strong>
        </a>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
            <div class="table-responsive" >
                <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                        <th>Nombre del producto</th>
                        <th>Cantidad</th>
                        <th>Costo unitario</th>
                    </thead>

                    
                    <tbody>
                    @foreach ($pedido->productos as $product)
                        <tr style="color: rgb(14,14,14);background-color:#CDE4F7; text-align:center">
                        <td style="text-align:left">{{$product->nombre}}</td>
                        <td>{{$product->pivot->cantidad_producto}} {{$product->unidad}}</td>
                        <td></td>
                        </tr>
                    @endforeach
                    <td colspan="3" style="background-color: rgba(195, 255, 195, 0.623)"><strong>Total de productos:</strong>{{$pedido->cantidad_total}}</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>           
    <hr>

    <h5 style="margin-left:20px"><strong>Trabajador encargado:</strong> {{$pedido->trabajador->nombre}}</h5>
    <h5 style="margin-left:20px"><strong>Estado:</strong>{{$pedido->estado}} </h5>
    <h5 style="margin-left:20px"><strong>Fecha del pedido:</strong> {{$pedido->productos[0]->pivot->fecha}}</h5>
@endsection