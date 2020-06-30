@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Lista de proveedores')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('proveedores.buscar_p')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive" >
        <table id="proveetable" class="table table-striped table-bordered nowrap" cellspacing="0"  style="border-collapse: separate;">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Empresa Proveedora</th>
                <th>Nombre del trabajador de la empresa</th>
                <th>Acciones</th>
            </thead>

            @foreach ($proveedores as $proveedor)
            @include('proveedores.modal_delete')
                <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">                    
                    <td style="text-align:center">{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->empresa }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td style="text-align:center">
                        <a href="{{ route('proveedor.editar', ['id' => $proveedor->id]) }}">
                            <button class="btn btn-warning">
                                <span class="fas fa-pencil-alt"></span>
                            </button>
                        </a>
                        <a href="" data-target="#ModalDelete{{ $proveedor->id }}" data-toggle="modal">
                            <button class="btn btn-danger">
                                <span class="fas fa-trash-alt"></span>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
         </table>
    </div>
</div>


<script>
    $(document).ready(function() {
          $('#proveetable').DataTable({
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