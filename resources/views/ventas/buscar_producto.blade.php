<div class="input-group">
    @include('ventas.modal_add_producto')
    <input type="text" class="form-control" style="text-align: center" id="searchValue" name="value" placeholder="Búsqueda" autofocus autocomplete="off">
</div>

<script>

    $("#searchValue").on("keyup", function (event) {
        let currentValue = $(this).val();
        $.get("{{ route('venta.orden.buscar') }}", { value: currentValue }).done(function(data) {
            $("#searchResults").html(data);
        });
    });


    $("#ModalAddProducto").on("hidden.bs.modal", function (event) {
        const searchInput = $("#searchValue");
        searchInput.val("");
        $("#resultsArea").html("");
        searchInput.focus();
    });

</script>