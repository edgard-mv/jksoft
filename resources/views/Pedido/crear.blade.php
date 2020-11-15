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
                    <strong><label for="trabajadores">Selecciona tu nombre</label></strong>
                    <select class="form-control" name="operario_id" id="trabajadores" style="max-width:63%">
                        @foreach ($operariosDisponibles as $operario)
                            <option value="{{ $operario->id }}">{{ $operario->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <strong><label for="proveedores">Selecciona el nombre de la compañia proveedora</label></strong>
                    <select class="form-control" name="proveedor_id" id="proveedores" style="max-width:63%">
                        <option value="" selected disabled>proveedor</option>
                        @foreach ($proveedoresDisponibles as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->empresa}}</option>
                        @endforeach
                    </select>
                </div>

    
                <div class="form-group">
                    
                    <strong><label for="precio">Productos solicitados</label></strong>

                    {{-- <div class="input-group" style="align-content: center,margin-bottom:10px">
                    <select class="form-control" name="products" id="productos" style="max-width:53%">
                        <option value="" selected disabled>producto</option>
                    </select>
                    <button id="agregarProducto" class="btn btn-success" type="submit" style="margin-left: 5px">OK</button>
                    </div> --}}
                    </span>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
                            <div class="table-responsive" style="margin-top:20px">
                                <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;"
                                    data-toggle="table"
                                    {{-- data-search="true" --}}
                                    data-show-columns="false"
                                    data-checkbox-header="false"
                                    data-click-to-select="true"
                                    {{-- data-pagination="true" --}}
                                    {{-- data-show-search-clear-button="true" --}}
                                    {{-- data-search-align="left" --}}
                                    {{-- data-toolbar="#toolbar" --}}
                                    {{-- data-toolbar-align="right" --}}
                                    {{-- data-buttons-class="dark" --}}
                                    data-locale="es-ES">            
                                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th>ID</th>
                                            <th>Producto</th>
                                            <th>Precio por unidad</th>
                                            <th>Cantidad</th>
                                            <th>Subtotal</th> 
                                        </tr>
                                    </thead>
                                    <tbody id="productos">
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
                               
    
                <div class="form-group">
                    <strong><label for="fecha">Fecha de la solicitud</label></strong>
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

<script>
    $("#proveedores").change(function () {
        let currentID = $(this).val();
        // alert(currentID);
        $.get("{{ route('proveedor.productos') }}", { provider_id: currentID }).done(function(data) {
            //alert(data);
            $("#productos").html(data);
        });
    })

</script>

@endsection