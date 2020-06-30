@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Agregar abono a venta N° ' . $venta->id . ' al crédito')
@section('content')

<div  class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="datos_venta">
            <fieldset style="border: 4px groove;border-color: skyblue;">
                <legend style=" width: auto;">Datos de venta</legend>

                <div class="row d-flex justify-content-between" style="margin-left: 100px; margin-right:100px">
                    <div class="form-group" style="text-align: center">
                        <h6><strong><label for="fecha">Plazo para el Pago</label></strong></h6>
                        <h6 id="fecha" name="fecha">{{ $venta->fecha }}</h6>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <h6><strong><label for="cliente">Cliente</label></strong></h6>
                        <h6 id="fecha" name="fecha">{{ $venta->credito->cliente }}</h6>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <h6><strong><label for="cliente">Abonado Hasta Ahora</label></strong></h6>
                        <h6 id="fecha" name="fecha">@money($totalAbonado)</h6>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <h6><strong><label for="cliente">Último Abono Realizado</label></strong></h6>
                        <h6 id="fecha" name="fecha">{{ $ultimoAbono ?? "No hay abonos"}}</h6>
                    </div>
                </div>
                <h5 style="text-align: center"><strong>Total a pagar: </strong><span id="total">@money($venta->credito->monto)</span> córdobas</h5>    
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
            <hr>
            <h5 style="text-align: center"><strong>Pendiente: <span id="total">@money($venta->credito->monto - $totalAbonado)</span> córdobas</strong></h5>
            <hr>
        </div>
        <form action="{{ route('venta.credito.abonar', ['id' => $venta->id]) }}" id="payForm" method="post">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin-left: 200px; margin-right:200px; text-align:center">
                <h6><strong><label for="cantidad">Cantidad a abonar</label></strong></h6>
                <input type="number" name="cantidad" id="cantidad" class="cantidad form-control" style="text-align: center" min="1" autocomplete="off">
            </div>
            <div class="form-group" style="text-align: center;margin-left: 400px; margin-right:400px">
                @include('ventas.mensajes')
            </div>
            <div class="form-group" style="margin-left: 200px; margin-right:200px; text-align:center">
                <h6><strong><label for="comentarios">Comentarios</label></strong></h6>
                <textarea class="form-control" name="comentarios" id="comentarios" rows="3"></textarea>
            </div>

            <hr>
            
            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">
                    <span class="fas fa-save"></span>
                    <strong>Abonar</strong>
                </button>
                <a href="{{ route('venta.todos') }}" class="btn btn-default btn-danger">
                    <span class="fas fa-times"></span>
                    <strong>Cancelar</strong></a>
                </a>
            </div>
        </form>

    </div>
</div>


@endsection
