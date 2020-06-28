<div class="modal fade bd-example-modal-sm" id="ModalAddProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="">
          <div class="modal-body" style="text-align:center">
            <div class="form-group">
              <h5><strong><label for="cantidad">Cantidad</label></strong></h5>
              <input type="number" value="1" class="form-control" autocomplete="off" name="cantidad" id="cantidadValor">
            </div>
          </div>
      
          <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-primary" type="submit">Aceptar</button>
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

</script>