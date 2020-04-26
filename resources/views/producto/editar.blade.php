@extends('menu')
@section('titulo','Productos')
@section('pagetitle','Editar datos del producto')
@section('content')

<div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <strong><label for="Nombre_P">Nombre del producto</label></strong>
              <input type="text" class="form-control" autocomplete="off" name="Nombre_P">
            </div>

            <div class="form-group">
              <strong><label for="stock">Stock</label></strong>
              <input type="text" class="form-control" autocomplete="off" name="stock">
            </div>

            <div class="form-group">
              <strong><label for="empresa">Empresa proveedora</label></strong>
              <input type="text" class="form-control" autocomplete="off" name="empresaproveedora">
            </div>

            <div class="form-group">
                <strong><label for="cantidadproveida">Cantidad del producto</label></strong>
                <input type="number" class="form-control"  autocomplete="off" name="cantidadproveida"  >
            </div>

            <div class="form-group">
              <strong><label for="fecha">Fecha de la provisión</label></strong>
              <input type="date" class="form-control" autocomplete="off" name="empresaproveedora">
            </div>

            <div class="form-group">
                <strong><label for="precioproducto">Precio por unidad del producto</label></strong>
                <input type="number" class="form-control"  autocomplete="off" name="precioproducto" >
           </div>
                                    
            <div class="form-group" style="text-align:center">
                <button class="btn btn-info" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            
            </div>



            
        </div>
    </div>



@endsection