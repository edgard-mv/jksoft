@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Detalles de venta 000000 al contado')
@section('content')

        <form class="datos_venta">

        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive" >
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                    <th>Fecha de la venta</th>
                    <th>Nombre del producto</th>
                    <th>Cantidad vendida del producto</th>
            
                </thead>

            <tr style="color: rgb(14,14,14);background-color:#BDD7FE;filter: contrast(82%);">
                    <td></td>
                    <td></td>
                    <td></td>                   
            </tr>
            </table>
        </div>
        </div>
        </div>
           
        <hr>

        <strong style="margin-left:20px"><label for="total_v"> Total cancelado: 00000 cordobas </label></strong>

        <p style="text-align:center">
            <button class="btn btn-danger" type="reset" >Cancelar</button></p>


        
        </form>



      
        @endsection