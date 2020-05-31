<div class="modal fade bd-example-modal-sm" id="ModalAddProveedor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="{{ route('producto.proveedor.agregar', ['producto_id' => $producto->id]) }}" method="post">
          @csrf
          @method('PUT')
          <div class="modal-body" style="text-align:center">
            <div class="form-group">
              <h5><strong><label for="proveedores">Elige un proveedor</label></strong></h5>
              <select class="form-control" name="proveedor_id" id="proveedores">
                @foreach ($proveedoresDisponibles as $proveedor)
                  <option value="{{ $proveedor->id }}">{{ $proveedor->empresa }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <h5><strong><label for="cantidad">Cantidad</label></strong></h5>
              <input type="number" value="0" class="form-control" autocomplete="off" name="cantidad">
            </div>

            <div class="form-group">
              <h5><strong><label for="fecha">Fecha</label></strong></h5>
              <input type="date" value="{{ date('Y-m-d', strtotime($fecha)) }}" class="form-control" autocomplete="off" name="fecha">
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