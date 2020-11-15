@extends('menu')
@section('titulo','Pedidos')
@section('pagetitle','Editar Pedido')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="{{ route('pedidos.editar', ['id' => $pedido->id])  }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <strong><label for="trabajadores">Trabajador quien realizó pedido</label></strong>
                    <input class="form-control" name="operario_id" id="trabajadores" style="max-width:63%"
                            value="{{ $pedido->trabajador->nombre }}" readonly>
                    </select>
                </div>

                <div class="form-group">
                    <strong><label for="proveedores">Compañia proveedora</label></strong>
                    <input class="form-control" name="proveedor_id" id="proveedores" style="max-width:63%"
                    value="" readonly>
                </div>

    
                <div class="form-group">
                    
                    <strong><label for="precio">Productos solicitados</label></strong>

                    <div class="input-group" style="align-content: center,margin-bottom:10px">
                    <select class="form-control" name="produc" id="productos" style="max-width:53%">
                        
                    </select>
                    <button class="btn btn-success" type="submit" style="margin-left: 5px">OK</button>
                    </div>
                    </span>
                    
                    <table class="table table-bordered " style="margin-top: 5px">
                        <thead style="background-color:mistyrose">
                          <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> </td>
                            <td> </td>
                           
                          </tr>
                        </tbody>
                      </table>

                </div>
                                
                <div class="form-group">
                    <strong><label for="estado">Estado</label></strong>                             
                    <select class="form-control" name="estado" style="max-width:63%">
                            <option value="realizado">Realizado</option>
                            <option value="pendiente">Pendiente</option>
                    </select>
                </div>
                               
    
                <div class="form-group" style="text-align:center">
                    <button class="btn btn-primary" type="submit">
                        <span class="fas fa-save"></span>
                        <strong>Guardar</strong>
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">
                        <span class="fas fa-times"></span>
                        <strong>Cancelar</strong></a>
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection