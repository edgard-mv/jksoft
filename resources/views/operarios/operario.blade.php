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
            <div class="container-fluid">
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
                                    <li>{{ $trabajador->salarios[0]->horas}} </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>{{ $trabajador->salarios[0]->pago_por_hora}} córdobas</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>{{ $trabajador->salarios[0]->extra}}</li>
                                </ul>
                            </td>
                            <td>{{ ($trabajador->salarios[0]->extra + $trabajador->salarios[0]->horas) * $trabajador->salarios[0]->pago_por_hora}} córdobas</td>
                            <td style="text-align:center">
                            <a href="{{ route('operarios.editar', ['id' => $trabajador->id])}}"><button class="btn btn-warning">
                                <span class="fas fa-pencil-alt"></span>
                                </button></a>
                                <a data-toggle="modal" data-target="#ModalDelete{{ $trabajador->id }}">
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
    </div>
</div>

@endsection