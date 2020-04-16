@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Nueva venta al crédito')
@section('content')

    <div  class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <form class="datos_venta">
        <fieldset style="border: 4px groove;border-color: skyblue;">
        <legend style=" width: auto;">Datos de artículo en venta</legend>

        <p style="text-align:right">
            <strong style="margin-right:20px">N° de venta: 000000 </strong>
        </p>

        <p>
        <ul><li><label for="cliente">Nombre del cliente</label>
        <input type="text" id="cliente"></li></ul>
        </p>

        <p>
            <ul><li><label for="nombre_p">Nombre del producto</label>
                <select name="productos" id="nombre_p">
                    <option value="0"></option>
                    <option value="1">Nombre 1</option>
                    <option value="2">Nombre 2</option>
                </select></li></ul>
        </p>

        <p>
        <ul><li><label for="cantidad_v">Cantidad de productos a comprar</label>
        <input type="number" id="cantidad_v"></li></ul>
        </p>

        <p>
        <ul><li><label for="fecha_p">Fecha de plazo para el pago</label>
         <input type="date" name="fecha_p" id="fecha_p" min="2020-02-04" max="2020-05-30" step="2"></td>
        </p></li></ul>


        <p>
        <ul><li><label for="stock">Stock del producto</label>
        <input type="number" id="stock" disabled></li></ul>
        </p>

        <p>
        <ul><li><label for="p_unitario">Precio unitario del producto</label>
        <input type="number" id="p_unitario" disabled></li></ul>
        </p>

        <p>
        <ul><li><textarea id="comentarios" rows="4" cols="50">
            </textarea></li></ul>
        
        </p>


        <p style="text-align:right">
        <button type="submit" class="btn btn-info" style="margin-right:30px" > + Agregar producto</button>
        </p>

        </fieldset>
        </form>

        <div class="row"><!--table begin-->
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive" style="margin-top:20px">
                  <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>Nombre del producto</th>
                <th>Fecha de plazo</th>
                <th>Cantidad</th>
                <th>Precio por unidad</th>
                <th>Monto</th> 
                <th>Acción</th>    
            </thead>

            <tr style="background-color:rgba(79,189,227,0.3)">
                    <td ></td>
                    <td style="text-align:center"> <input type="date" name="fecha_p" id="fecha_p" min="2020-02-04" max="2020-05-30" step="2"></td>
                    <td > <input type="number" class="form-control" autocomplete="off" name="cantidad_v"></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:center">
                        <a href="/"><button class="btn btn-danger">X</button></a>
                    </td>
            </tr>
             </table>
        </div>
        </div>
        </div><!--end of the table-->

        <hr>

              <strong><label for="total_v"> Total a pagar: 00000 cordobas </label></strong>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>     

 

           




@endsection