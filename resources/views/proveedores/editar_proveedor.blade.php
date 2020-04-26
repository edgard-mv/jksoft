@extends('menu')
@section('titulo','Proveedores')
@section('pagetitle','Editar datos del proveedor')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <strong><label for="Nombre_pro">Nombre de la empresa proveedora</label></strong>
              <input type="text" class="form-control" autocomplete="off" name="Nombre_pro">
            </div>

            <div class="form-group">
                <strong><label for="nombre_proveedor">Nombre del proveedor de la empresa</label></strong>
                <input type="text" class="form-control"  autocomplete="off" name="nombre_proveedor" >
           </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            
            </div>     
        </div>
    </div>




@endsection