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
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center text-info bg-light border rounded shadow align-items-center">
                <th>Nombre del trabajador</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Horas laboradas</th>
                <th>Pago por hora</th>
                <th>Horas Extras</th>
                <th>Salario</th>
                <th>Acción</th>
            
            </thead>

            <tr style="color: rgb(14,14,14);background-color: rgba(79,189,227,0.3);filter: contrast(82%);">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:center">
                        <a href="/editar_op"><button class="btn btn-warning">Editar</button></a>
                        <a href="" data-target="#ModalDelete" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
            </tr>
         </table>
    </div>
</div>

@endsection