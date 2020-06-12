@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Lista de ventas realizadas')
@section('content')


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" >
        @include('ventas.buscar_v')
    </div> 
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>N⁰ Venta</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Monto total</th>
                <th>Estado</th>
                <th>Acción</th>
            
            </thead>

            <tr style="color: rgb(14,14,14);background-color:  #CDE4F7;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align:center">
                    <a href="/detallecr"><button class="btn btn-warning">Detalles</button></a>
                </td>
            </tr>
         </table>
    </div>
</div>

@endsection