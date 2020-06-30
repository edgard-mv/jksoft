@extends('menu')
@section('titulo','Trabajadores')
@section('pagetitle','Lista de trabajadores')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('operarios.buscar_o')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table id="Worktable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                
                <th>Nombre del trabajador</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Horas laboradas</th>
                <th>Pago por hora</th>
                <th>Horas Extras</th>
                <th>Salario</th>
                <th>Acción</th>
            
            </thead>

            <tbody>
            @foreach ($trabajadores as $trabajador)
            @include('operarios.modal_delete')
            <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">
                    <td>{{ $trabajador->nombre }}</td>
                    <td>{{ $trabajador->telefono }}</td>
                    <td>{{ $trabajador->edad }} años</td>
                    <td>
                       
                        <ul>
                          <li>{{ $trabajador->horas}} </li>
                        </ul>
                        
                    </td>
                        
                    <td>
                        <ul>
                            <li>{{ $trabajador->pago_por_hora}} córdobas</li>
                          </ul>
                    </td>
                    
                    <td>
                        <ul>
                            <li>{{ $trabajador->extra}} </li>
                        </ul>
                    
                    </td>
                
                    <td>{{ ($trabajador->extra + $trabajador->horas)*$trabajador->pago_por_hora}} córdobas</td>
                    <td style="text-align:center">
                       <a href="{{ route('operarios.editar', ['id' => $trabajador->trabajador_id])}}"><button class="btn btn-warning">
                        <span class="fas fa-pencil-alt"></span>
                        </button></a>
                        
                        <a data-toggle="modal" data-target="#ModalDelete{{ $trabajador->trabajador_id }}">
                            <button class="btn btn-danger">
                                <span class="fas fa-trash-alt"></span>
                            </button>
                        </a>
                    </td>
            </tr>
            @endforeach
            </tbody>
         </table>
    </div>
</div>

<script>
    $(document).ready(function() {
          $('#Worktable').DataTable({
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