@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Nueva venta al contado')
@section('content')


<div  class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="datos_venta">
            <fieldset style="border: 4px groove;border-color: skyblue;">
                <legend style=" width: auto;">Agregar producto</legend>

                <div class="" style="margin-left:200px; margin-right:200px">
                    @include('ventas.buscar_producto')
                </div>

                <div class="form-group align-items-center" id="searchResults">
                    @include('ventas.resultados')
                </div>
                <div id="msgsArea" class="form-group" style="text-align: center;margin-left: 400px; margin-right:400px">
                    @include('ventas.mensajes')
                </div>
            </fieldset>
        </div>
        <form action="{{ route('venta.contado.nuevo') }}" id="orderForm" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
                    <div class="table-responsive" style="margin-top:20px">
                        <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
                            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                                <th>Nombre del producto</th>
                                <th>Precio por unidad</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th> 
                                <th>Acción</th>    
                            </thead>
                            @foreach ((array) session('order') as $id => $details)
                                <tr style="color: rgb(14,14,14);background-color:#CDE4F7; text-align:center">
                                    <td style="text-align:left">
                                        {{ $details['nombre'] }}
                                    </td>
                                    <td class="precio">@money($details['precio'])</td>
                                    <td>
                                        <input type="number" name="order[{{ $id }}][quantity]" value="{{ $details['quantity'] }}" class="cantidad form-control" style="text-align: center" min="1" autocomplete="off">
                                    </td>
                                    <td class="subtotal">@money($details['subtotal'])</td>
                                    <td style="text-align:center">
                                        <a href="{{ route('venta.contado.orden.remover', ['id' => $id]) }}" class="btn btn-danger">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <hr>

            <h5 style="text-align: right"><strong style="margin-right:80px">Total a pagar: <span id="total">@money($total)</span> córdobas</strong></h5>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">
                    <span class="fas fa-save"></span>
                    <strong>Guardar</strong>
                </button>
                <a href="{{ route('venta.contado.orden.remover') }}" class="btn btn-default btn-danger">
                    <span class="fas fa-times"></span>
                    <strong>Cancelar</strong></a>
                </a>
            </div>
        </form>

    </div>
</div>

<script>
    $(".cantidad").change(function () {
        let price = $(this).parents("tr").find(".precio").html().substr(2);
        price = parseFloat(price);

        let quantity = $(this).val();
        quantity = parseInt(quantity);

        if (Number.isInteger(quantity) && quantity > 0) {
            const subTotalTD = $(this).parents("tr").find(".subtotal");
            let currentSubTotal = parseFloat(subTotalTD.html().substr(2).replace(",", ""));

            const totalSpan = $("#total");
            let currentTotal = parseFloat(totalSpan.html().substr(2).replace(",", ""));
            currentTotal -= currentSubTotal;
            currentSubTotal = price * quantity;
            currentTotal += currentSubTotal;

            subTotalTD.html("C$" + currentSubTotal.toFixed(2));
            totalSpan.html("C$" + currentTotal.toFixed(2));
        }
    });
</script>

 

           




@endsection