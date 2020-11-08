@extends('menu')
@section('titulo','Pedidos')
@section('pagetitle','Nuevo Pedido')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="{{ route('pedidos.nuevo') }}" method="post">
                @csrf
                @method('PUT')
               
                <div class="form-group">
                    <strong><label for="proveedores">Selecciona tu nombre</label></strong>
                    <select class="form-control" name="operario_id" id="trabajadores" style="max-width:63%">
                        @foreach ($operariosDisponibles as $operario)
                            <option value="{{ $operario->id }}">{{ $operario->nombre }}</option>
                        @endforeach
                    </select>
                </div>

    
                <div class="form-group">
                    
                    <strong><label for="precio">Productos solicitados</label></strong>

                    <div class="input-group" style="align-content: center,margin-bottom:10px">
                    <select class="form-control" name="produc" id="proveedores" style="max-width:53%">
                        
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
                    <strong><label for="cantidad">Estado</label></strong>                             
                    <input type="text" class="form-control" style="max-width:53%" autocomplete="off" name="estado" value="Pendiente" readonly>
                </div>
                               
    
                <div class="form-group">
                    <strong><label for="fecha">Fecha de la provisión</label></strong>
                    <input type="date" name="fecha" style="max-width:53%" value="{{ date('Y-m-d', strtotime($fecha)) }}" class="form-control" autocomplete="off">
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