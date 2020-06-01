@extends('menu')
@section('titulo','Operarios')
@section('pagetitle','Lista de los operarios')
@section('content')
@include('operarios.modal_delete')



<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('operarios.buscar_o')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
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
            <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">
                    <td>{{ $trabajador->nombre }}</td>
                    <td>{{ $trabajador->telefono }}</td>
                    <td>{{ $trabajador->edad }}</td>
                    <td>
                       
                        <ul>
                          <li>{{ $trabajador->horas}} </li>
                        </ul>
                        
                    </td>
                        
                    <td>
                        <ul>
                            <li>{{ $trabajador->pago_por_hora}} </li>
                          </ul>
                    </td>
                    
                    <td>
                        <ul>
                            <li>{{ $trabajador->extra}} </li>
                        </ul>
                    
                    </td>
                
                    <td>{{ ($trabajador->extra + $trabajador->horas)*$trabajador->pago_por_hora}}</td>
                    <td style="text-align:center">
                    <a href="{{ route('operarios.editar', ['id' => $trabajador->trabajador_id])}}"><button class="btn btn-warning">Editar</button></a>
                        <a href="" data-target="#ModalDelete" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
            </tr>
            @endforeach
            </tbody>
         </table>
    </div>
</div>

@endsection