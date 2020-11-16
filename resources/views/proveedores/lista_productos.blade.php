@isset($productos)
    @foreach ($productos as $producto)
    <tr style="color: rgb(14,14,14);background-color:#CDE4F7; text-align:center">
        <td class="bs-checkbox " style="width: 36px; ">
            <input name="pedido[{{$producto->id}}][selected]" type="checkbox">
        </td>
        <td style="text-align:left">
            {{ $producto->id }}
        </td>
        <td>{{ $producto->nombre }}</td>
        <td>
            <input type="number" name="pedido[{{$producto->id}}][price]" value="{{ $producto->precio }}" class="precio form-control" style="text-align: center" min="0" autocomplete="off">
        </td>
        <td>
            <input type="number" name="pedido[{{$producto->id}}][quantity]" value="0" class="cantidad form-control" style="text-align: center" min="0" autocomplete="off">
        </td>
        <td class="subtotal">@money(0)</td>
    </tr>
    @endforeach
@endisset

<script>
    $(".cantidad").change(function () {
        let price = $(this).parents("tr").find(".precio").val();
        price = parseFloat(price);
        
        let quantity = $(this).val();
        quantity = parseInt(quantity);
        
        if (Number.isInteger(quantity) && quantity > 0) {
            const subTotalTD = $(this).parents("tr").find(".subtotal");
            let currentSubTotal = parseFloat(subTotalTD.html().substr(2).replace(",", ""));
            
            // const totalSpan = $("#total");
            // let currentTotal = parseFloat(totalSpan.html().substr(2).replace(",", ""));
            // currentTotal -= currentSubTotal;
            currentSubTotal = price * quantity;
            // currentTotal += currentSubTotal;

            subTotalTD.html("C$" + currentSubTotal.toFixed(2));
            // totalSpan.html("C$" + currentTotal.toFixed(2));
        }
    });
</script>

{{-- <script>
    $(".selectedProduct").click(function(event) {
        event.preventDefault();
        
        const idSpan = $(this).find("#id");
        $value = parseInt(idSpan.html());

        $("#producto_id").val($value);
        $("#ModalAddProducto").modal("toggle");
    });

</script> --}}
