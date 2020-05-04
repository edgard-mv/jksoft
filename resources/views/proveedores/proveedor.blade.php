@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Lista de los proveedores')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('proveedores.buscar_p')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center text-info bg-light border rounded shadow align-items-center">
                <th>ID</th>
                <th>Empresa Proveedora</th>
                <th>Nombre del trabajador de la empresa</th>
                <th>Acciones</th>
            </thead>

            @foreach ($proveedores as $proveedor)
            <tr style="color: rgb(14,14,14);background-color: rgba(79,189,227,0.3);filter: contrast(82%);">                    
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->empresa }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td style="text-align:center">
                <a href="{{route('proveedor.editar', ['id' => $proveedor->id])}}"><button class="btn btn-warning">Editar</button></a>
                <a href="" data-target="" data-toggle=""><button class="btn btn-danger">Eliminar</button></a>
                </td>
            </tr>
            @endforeach
         </table>
    </div>
</div>

@endsection