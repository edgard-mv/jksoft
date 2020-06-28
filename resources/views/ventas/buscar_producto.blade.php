<div class="input-group">
    @include('ventas.modal_add_producto')
    <input type="text" class="form-control" style="text-align: center" id="searchValue" name="value" placeholder="Búsqueda" autofocus>
</div>

<script>
    
    $("#searchValue").on("keyup", function (event) {
        if (event.key === "Enter") {
            $("#ModalAddProducto").modal("toggle");
        }
    });

    $("#ModalAddProducto").on("hidden.bs.modal", function (event) {
        const searchInput = $("#searchValue");
        searchInput.val("");
        searchInput.focus();
    });

</script>