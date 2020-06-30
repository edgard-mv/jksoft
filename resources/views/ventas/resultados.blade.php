<div style="margin-left:200px; margin-right:200px">
    <div class="list-group" id="resultsArea">
        @isset($results)
            @foreach ($results as $producto)
                <a href="" class="selectedProduct list-group-item list-group-item-action d-flex justify-content-between align-items-center list-group-item-dark">
                    <span><strong>ID:</strong> <span class="badge badge-dark" id="id">{{ $producto->id }}</span></span>
                    <strong>{{ $producto->nombre }}</strong></span>
                    <span>Precio: <strong class="badge badge-primary">@money($producto->precio)</strong></span>                            
                </a>
            @endforeach
        @endisset
    </div>
</div>

<script>
    $(".selectedProduct").click(function(event) {
        event.preventDefault();
        
        const idSpan = $(this).find("#id");
        $value = parseInt(idSpan.html());

        $("#producto_id").val($value);
        $("#ModalAddProducto").modal("toggle");
    });

    // $(".selectedProduct").on("keyup", function (event) {
    //     if (event.key === "Enter") {
    //         $("#ModalAddProducto").modal("toggle");
    //     }
    // });
</script>
