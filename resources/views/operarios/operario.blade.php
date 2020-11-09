@extends('menu')
@section('titulo','Trabajadores')
@section('pagetitle','Lista de trabajadores')
@section('content')


{{-- <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-8" >
        @include('operarios.buscar_o')
    </div> 
</div> --}}

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive">
            <div class="container-fluid">
                <div id="toolbar">
                    <a class="btn btn-success" href="{{ route('operarios.nuevo') }}">
                        <span class="fas fa-plus-square"></span>
                        <strong>Nuevo</strong>
                    </a>
                </div>
                <table id="Worktable" class="table table-striped table-bordered nowrap" cellspacing="1"  style="border-collapse: separate;margin-right:40px"
                    data-toggle="table"
                    data-search="true"
                    data-show-columns="false"
                    data-pagination="true"
                    data-show-search-clear-button="true"
                    data-search-align="left"
                    data-toolbar="#toolbar"
                    data-toolbar-align="right"
                    data-buttons-class="dark"
                    data-locale="es-ES">
                    <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                        <tr>
                            <th class="align-middle" data-sortable="true">Nombre del trabajador</th>
                            <th class="align-middle">Teléfono</th>
                            <th class="align-middle" data-searchable="false">Edad</th>
                            <th class="align-middle" data-searchable="false">Horas laboradas</th>
                            <th class="align-middle" data-searchable="false">Pago por hora</th>
                            <th class="align-middle" data-searchable="false">Horas Extras</th>
                            <th class="align-middle" data-searchable="false" data-sortable="true">Salario</th>
                            <th class="align-middle" data-searchable="false">Acción</th>
                        </tr>
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