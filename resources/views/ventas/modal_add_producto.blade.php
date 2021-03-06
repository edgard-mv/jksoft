<div class="modal fade bd-example-modal-sm" id="ModalAddProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="" id="addProductForm">
          <div class="modal-body" style="text-align:center">
            <div class="form-group">
              <h5><strong><label for="cantidad">Cantidad</label></strong></h5>
              <input type="number" name="producto_id" id="producto_id" hidden>
              <input type="number" value="1" class="form-control" autocomplete="off" name="cantidad" id="cantidadValor" min="1">
            </div>
          </div>
      
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">
                <span class="fas fa-times"></span>
                <strong>Cancelar</strong>
              </button>
              <button class="btn btn-primary" type="submit">
                <span class="fas fa-plus"></span>
                <strong>Agregar</strong>
            </button>
          </div>
        </form>
      </div>
    </div>
</div>

<script>

    $("#ModalAddProducto").on("shown.bs.modal", function (event) {
        quantityInput = $(this).find("#cantidadValor");
        quantityInput.val(1)

        quantityInput.focus();
    });

    $("#addProductForm").submit(function (event) {
        event.preventDefault();

        let addFormData = $(this).serialize();
        let orderFormData = $("#orderForm").serialize();
        let fullData = addFormData + "&" + orderFormData.replace("&_method=PUT", "");

        $.post("{{ route('venta.orden.agregar') }}", fullData).done(function (rdata) {
            if (rdata) {
                let oldMsgs = $("#msgsArea").html();
                $("#msgsArea").html(oldMsgs + rdata);
                $("#ModalAddProducto").modal("hide");
            } else {
                location.reload();
            }
        });

    });

</script>