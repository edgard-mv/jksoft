@extends('menu')
@section('titulo','Ventas')
@section('pagetitle','Nueva venta al contado')
@section('content')


<div  class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="datos_venta">
            <fieldset style="border: 4px groove;border-color: skyblue;">
                <legend style=" width: auto;">Agregar producto</legend>

                <div class="form-group" style="margin-left:150px; margin-right:150px">
                    @include('ventas.buscar_producto')
                </div> 

                <div style="text-align:center; margin-right:30px; margin-bottom:10px">
                    <a>
                        <button class="btn btn-primary">
                            <span class="fas fa-plus"></span>
                            <strong>Agregar</strong>    
                        </button>
                    </a>
                </div>
            </fieldset>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
                <div class="table-responsive" style="margin-top:20px">
                    <table class="table table-striped table-bordered table-condensed table-hover" style="border-collapse: separate;">
                        <thead class="text-center text-dark bg-light border rounded shadow align-items-center">
                            <th>Nombre del producto</th>
                            <th>Precio por unidad</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th> 
                            <th>Acción</th>    
                        </thead>

                        <tr style="background-color:#CDE4F7;">
                            <td></td>
                            <td></td>
                            <td>
                                <input type="number" class="form-control" autocomplete="off" name="cantidad_v">
                            </td>
                            <td></td>
                            <td style="text-align:center">
                                <a href="/">
                                    <button class="btn btn-danger">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <hr>

        <strong><label for="total_v"> Total a pagar: 00000 cordobas </label></strong>

        <div class="form-group" style="text-align:center">
            <button class="btn btn-primary" type="submit">
                <span class="fas fa-save"></span>
                <strong>Guardar</strong>
            </button>
            <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">
                <span class="fas fa-times"></span>
                <strong>Cancelar</strong></a>
            </a>
        </div>

    </div>
</div>

 

           




@endsection