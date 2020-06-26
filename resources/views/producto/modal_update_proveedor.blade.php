<div class="modal fade bd-example-modal-sm" id="ModalUpdateProveedor{{ $proveedor->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('producto.proveedor.editar', ['id' => $proveedor->id, 'producto_id' => $producto->id]) }}" method="post">
              @csrf
              @method('PATCH')
              
              <div class="modal-body" style="text-align:center">
                <div class="form-group">
                  <h5>
                      <strong>Empresa</strong>
                      <br>
                      {{ $proveedor->empresa }}
                  </h5>
                  <br>
                  <h5>
                      <strong>Trabajador(a)</strong>
                      <br>
                      {{ $proveedor->nombre }}
                  </h5>
                </div>
                <br>
                <div class="form-group">
                    <h5><strong><label for="cantidad">Cantidad del producto</label></strong></h5>
                    <input type="number" value="{{ $proveedor->pivot->cantidad }}" class="form-control"  autocomplete="off" name="cantidad">
                </div>
              </div>

              <div class="modal-footer">
                <div class="form-group" style="text-align:center">
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                      <span class="fas fa-times"></span>
                      <strong>Cancelar</strong>
                  </button>
                  <button class="btn btn-primary" type="submit">
                      <span class="fas fa-save"></span>
                      <strong>Actualizar</strong>
                  </button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>