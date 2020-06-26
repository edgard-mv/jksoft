<div class="modal fade bd-example-modal-sm" id="ModalDeleteProveedor{{ $proveedor->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5><strong>¿Seguro que desea remover al proveedor?</strong></h5>
        </div>
    
        <div class="modal-footer">
          <form action="{{ route('producto.proveedor.remover', ['id' => $proveedor->id, 'producto_id' => $producto->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="button" data-dismiss="modal">
              <span class="fas fa-times"></span>
              <strong>Cancelar</strong>
            </button>
            <button class="btn btn-primary" type="submit">
              <span class="fas fa-check"></span>
              <strong>Aceptar</strong>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>