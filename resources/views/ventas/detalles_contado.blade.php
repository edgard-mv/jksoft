@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Detalles de venta N° ' . $venta->id . ' al contado')
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
                        <th>Precio al momento de venta</th>
                        <th>Cantidad vendida</th>
                        <th>Subtotal</th>
                    </thead>
                    @foreach ($venta->productos as $producto)
                        <tr style="color: rgb(14,14,14);background-color:#CDE4F7; text-align:center">
                            <td style="text-align:left">
                                {{ $producto->nombre }}
                            </td>
                            <td>@money($producto->pivot->precio_actual)</td>
                            <td>{{ $producto->pivot->cantidad_producto }}</td>
                            <td>@money($producto->pivot->monto)</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>           
    <hr>

    <h5 style="margin-left:20px"><strong>Fecha de la venta:</strong> {{ $venta->fecha }}</h5>
    <h5><strong style="margin-left:20px">Total cancelado:</strong> @money($venta->monto_total) córdobas</h5>
@endsection