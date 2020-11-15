@isset($productos)
    @foreach ($productos as $producto)
    <tr style="color: rgb(14,14,14);background-color:#CDE4F7; text-align:center">
        <td class="bs-checkbox"> 
            {{-- <div class="form-check"> --}}
                <input type="checkbox" value="" id="">
            {{-- </div> --}}
        </td>
        <td style="text-align:left">
            {{ $producto->id }}
        </td>
        <td>{{ $producto->nombre }}</td>
        <td class="precio">
            <input type="number" name="order[$producto->id][price]" value="{{ $producto->precio }}" class="cantidad form-control" style="text-align: center" min="1" autocomplete="off">
        </td>
        <td>
            <input type="number" name="order[$producto->id][quantity]" value="0" class="cantidad form-control" style="text-align: center" min="1" autocomplete="off">
        </td>
        <td class="subtotal">@money(0)</td>
    </tr>
    @endforeach
@endisset

{{-- <script>
    $(".selectedProduct").click(function(event) {
        event.preventDefault();
        
        const idSpan = $(this).find("#id");
        $value = parseInt(idSpan.html());

        $("#producto_id").val($value);
        $("#ModalAddProducto").modal("toggle");
    });

</script> --}}
