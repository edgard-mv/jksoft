@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Lista de productos')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('producto.buscar')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table id="producttable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Stock</th>
                <th>Empresa Proveedora</th>
                <th>Cantidad proveida</th>
                <th>Fecha</th>
                <th>Precio por unidad</th>
                <th>Acciones</th>
            </thead>

            <tbody>
            @foreach ($productos as $producto)
            @include('producto.modal_delete')
            <tr style="text-align:center; color: rgb(14,14,14);background-color: #CDE4F7;">
                <td>{{ $producto->id }}</td>
                    <td style="text-align:left">
                        {{ $producto->nombre }}
                    </td>
                    <td style="text-align:center">{{ $producto->cantidad }} ud(s).</td>
                    <td style="text-align:left">
                        <ul>
                            @foreach ($producto->proveedores as $proveedor)
                                <li>{{ $proveedor->empresa }}</li>
                            @endforeach    
                        </ul>
                    </td>
                    <td style="text-align:left">
                        <ul>
                            @foreach ($producto->proveedores as $proveedor)
                                <li>{{ $proveedor->pivot->cantidad }}</li>
                            @endforeach    
                        </ul>
                    </td>
                    <td>{{ date('Y-m-d', strtotime($producto->updated_at)) }}</td>
                    <td>@money($producto->precio)</td>
                    <td>
                        <div class="input-group-btn">
                            <a href="{{ route('producto.editar', ['id' => $producto->id]) }}">
                                <button class="btn btn btn-warning">
                                    <span class="fas fa-pencil-alt"></span>
                                </button>
                            </a>
                            <a href="{{ route('producto.proveedores', ['id' => $producto->id]) }}">
                                <button class="btn btn-primary">
                                    <span class="fas fa-list-ul"></span>
                                </button>
                            </a>
                            <a data-toggle="modal" data-target="#ModalDelete{{ $producto->id }}">
                                <button class="btn btn-danger">
                                    <span class="fas fa-trash-alt"></span>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div style="margin-top: 5px" >
<span class="badge badge-pill badge-warning"> <span class="fas fa-pencil-alt"></span> Editar datos del producto</span>
<span class="badge badge-pill badge-primary" style="margin-left: 5px"> <span class="fas fa-list-ul"></span> Editar datos del proveedor</span>
</div>

<script>
$(document).ready(function() {
      $('#producttable').DataTable({
        "language": {
            "lengthMenu": "Registros _MENU_ por pagina",
            "zeroRecords": "Resultados no encontrados",
            "info": "Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No existen registros que coincidan",
            "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
        },
        "searching": false,
         "paging": true, 
         "info": false,         
         "lengthChange":true ,
        "pageLength": 6,
        "bFilter":true,
        "lengthMenu": [[5,10, 15, 20, -1], [5,10, 15, 20, "Todos"]] ,
        

        });
    
});

</script>

@endsection