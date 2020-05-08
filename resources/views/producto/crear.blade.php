@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Nuevo Producto')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <strong><label for="Nombre_P">Nombre del producto</label></strong>
              <input type="text" class="form-control" autocomplete="off" name="Nombre_P">
            </div>

            <div class="form-group">
                <strong><label for="precioproducto">Precio por unidad del producto</label></strong>
                <input type="number" class="form-control"  autocomplete="off" name="precioproducto" >
           </div>
                            
            <div class="form-group">
                <strong><label for="cantidadproveida">Cantidad proveida</label></strong>                             
                <input type="number" class="form-control"  autocomplete="off" name="cantidadproveida">
            </div>
                           
            <div class="form-group">
                <select name="empresa">
                <option value="0">Seleccione el nombre de la empresa proveedora</option>
                <option value="1">Nombre 1</option>
                <option value="2">Nombre 2</option>
                </select>
            </div>

            <div class="form-group">
                <strong><label for="fechaproveida">Fecha de la provisión </label></strong>
                <input type="date" name="fecha" id="fechaproveida" min="2020-02-04" max="2020-05-30" step="2">
            </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            
            </div>



            
        </div>
    </div>




@endsection