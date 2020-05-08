<div class="modal fade bd-example-modal-sm" id="ModalDeleteProveedor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <strong><h5>¿Seguro que desea remover al proveedor?</h5></strong>
        </div>
    
        <div class="modal-footer">
          <form action="{{ route('producto.proveedor.remover', ['id' => $proveedor->id, 'producto_id' => $producto->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-primary" type="submit">Aceptar</button>
          </form>
        </div>
      </div>
    </div>
  </div>