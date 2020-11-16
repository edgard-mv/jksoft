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
                    
                    <strong><label for="precio">Productos solicitados</label></strong>

                  
                    </span>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
                            <div class="table-responsive" style="margin-top:20px">
                                <table id="table" class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;"
                                    data-toggle="table"
                                    data-show-columns="false"
                                    {{-- data-checkbox-header="false" --}}
                                    data-locale="es-ES">
                                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th>Producto</th>
                                            <th>Precio por unidad</th>
                                            <th>Cantidad</th>
                                            <th>Subtotal</th> 
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($pedido->productos as $producto)
                                        @include('producto.modal_delete')
                                        <tr style="text-align:center; color: rgb(14,14,14);background-color: rgba(213, 217, 219, 0.993);">
                                            <td>{{ $producto->id }}</td>
                                                <td style="text-align:left">
                                                    {{ $producto->nombre }}
                                                </td>
                                                <td style="text-align:center" id="precio">
                                                        <input type="number" value="{{$producto->pivot->precio_compra}}" class="form-control" autocomplete="off" name="precio">
                                                </td>
                                                <td id="cantidad">
                                                    <input type="number"  value="{{ $producto->pivot->cantidad_producto}}" class="form-control" autocomplete="off" name="cantidad">    
                                                </td>
                                                <td style="text-align:left">
                                                </td>
                                                   
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
                </div>
                                
                <div class="form-group">
                    <strong><label for="estado">Estado</label></strong>                             
                    <input type="text" class="form-control" style="max-width:53%" autocomplete="off" name="estado" value="Pendiente" readonly>
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