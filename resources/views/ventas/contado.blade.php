@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Nueva venta al contado')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

             <div class="form-group">
                <strong><label for="numero_d_eventa">N° de venta</label></strong>
                <input type="text" style="width:150px" id="numero_d_eventa" disabled>
            </div>

        <div class="row"><!--table begin-->
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed table-hover">
            <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                <th>Nombre del producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Precio por unidad</th>
                <th>Monto</th> 
                <th>Acción</th>    
            </thead>

            <tr style="background-color:#FCF3CF">
                    <td >
                    <div class="form-group">
                        <select name="productos">
                        <option value="0">Seleccione el producto a comprar</option>
                        <option value="1">Nombre 1</option>
                        <option value="2">Nombre 2</option>
                        </select>
                    </div>
                    </td>
                    <td> <input type="date" name="fecha" id="fechaventa" min="2020-02-04" max="2020-05-30" step="2"></td>
                    <td><input type="number" style="width:200px" class="form-control" autocomplete="off" name="cantidad_v"></td>
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

             <div class="form-group">
              <strong><label for="total_v">Total a pagar</label></strong>
              <input type="number" style="width:150px,text-align:right" class="form-control" autocomplete="off" name="total_v" disabled>
            </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>     

        </div>
    </div>

           




@endsection