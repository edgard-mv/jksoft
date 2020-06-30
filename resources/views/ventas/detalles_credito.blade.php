@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Detalles de venta N° ' . $venta->id . ' al crédito')
@section('content')
    <div style="margin-left:2px" class="row">
        <a href="{{ url()->previous() }}" class="btn btn-danger">
            <span class="fas fa-arrow-left"></span>
            <strong>Regresar</strong>
        </a>
        @if ($venta->estado != 'Saldado')
            <a href="{{ route('venta.credito.abonar', ['id' => $venta->id]) }}" class="btn btn-success" style="margin-left:890px">
                <span class="fas fa-plus-square"></span>
                <strong>Agregar abono</strong>
            </a>
        @endif
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
    <h5 style="text-align: center"><strong>Pendiente: <span id="total">@money($venta->credito->monto - $totalAbonado)</span> córdobas</strong></h5>
    <hr>

    <div class="datos_venta">
        <fieldset style="border: 4px groove;border-color: skyblue;">
            <legend style=" width: auto;">Datos de venta</legend>

            <div class="row d-flex justify-content-between" style="margin-left: 100px; margin-right:100px">
                <div class="form-group" style="text-align: center">
                    <h6><strong><label for="cliente">Total a cancelar</label></strong></h6>
                    <h6 id="fecha" name="fecha">@money($venta->monto_total)</h6>
                </div>
                <div class="form-group" style="text-align: center">
                    <h6><strong><label for="cliente">Abonado Hasta Ahora</label></strong></h6>
                    <h6 id="fecha" name="fecha">@money($totalAbonado)</h6>
                </div>
                <div class="form-group" style="text-align: center">
                    <h6><strong><label for="cliente">Último Abono Realizado</label></strong></h6>
                    <h6 id="fecha" name="fecha">{{ $ultimoAbono ?? "No hay abonos" }}</h6>
                </div>
            </div>
            <div class="row d-flex justify-content-between" style="margin-left: 100px; margin-right:100px">
                <div class="form-group" style="text-align: center">
                    <h6><strong><label for="cliente">Fecha de la venta</label></strong></h6>
                    <h6 id="fecha" name="fecha">{{ $venta->fecha }}</h6>
                </div>
                <div class="form-group" style="text-align: center">
                    <h6><strong><label for="cliente">Cliente</label></strong></h6>
                    <h6 id="fecha" name="fecha">{{ $venta->credito->cliente }}</h6>
                </div>
                <div class="form-group" style="text-align: center; margin-left:80px">
                    <h6><strong><label for="fecha">Plazo para el Pago</label></strong></h6>
                    <h6 id="fecha" name="fecha">{{ $venta->fecha }}</h6>
                </div>
            </div>
            <div id="msgsArea" class="form-group" style="text-align: center;margin-left: 400px; margin-right:400px">
                <ul class="list-group">
                    @if ($msg)
                        <li class="list-group-item list-group-item-info">
                            <span class="fas fa-exclamation-circle"> </span>
                            <strong>{{ $msg }}</strong>
                        </li>
                    @endif
                </ul>
            </div>
        </fieldset>
    </div>


@endsection