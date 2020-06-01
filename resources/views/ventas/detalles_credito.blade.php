@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Detalles de venta 000000 al crédito')
@section('content')

        <form class="datos_venta">

        <p>
        <ul><li><label for="cliente">Nombre del cliente</label>
        <input type="text" id="cliente" disabled></li></ul>
        </p>

        <p>
        <ul><li><label for="fecha_p">Fecha de plazo para el pago</label>
         <input type="date" name="fecha_p" id="fecha_p" min="2020-02-04" max="2020-05-30" step="2"></td>
        </p></li></ul>

        <p>
        <textarea id="comentarios" rows="4" cols="50">
            </textarea>
        
        </p>

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

        <strong style="margin-left:20px"><label for="total_v"> Total de venta: 00000 cordobas </label></strong>

        <p style="text-align:center">
            <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            <button class="btn btn-info" type="sumit" >Pagado</button></p>


        
        </form>



      
        @endsection