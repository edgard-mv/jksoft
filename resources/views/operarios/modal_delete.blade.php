<div class="modal fade bd-example-modal-sm" id="ModalDelete{{ $trabajador->trabajador_id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <strong><h5>¿Seguro que desea eliminar los datos del trabajador?</h5></strong>
      </div>
  
      <div class="modal-footer">
        <form action="{{ route('operarios.remover', ['id' => $trabajador->trabajador_id]) }}" method="post">
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