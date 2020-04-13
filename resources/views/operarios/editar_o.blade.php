@extends('menu')
@section('titulo','Operarios')
@section('pagetitle','Editar datos de operario')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <strong><label for="nombret">Nombre del operario</label></strong>
              <input class="form-control border rounded shadow-lg"    autocomplete="off"  type="text" name="nombret" required="" maxlength="150" autofocus="" > 
            </div>

            <div class="form-group">
                <strong><label for="telefonot">Teléfono</label></strong>
                <input type="text" class="form-control border rounded shadow-lg " autocomplete="off" name="telefonot" autofocus="">
           </div>

           <div class="form-group">
                <strong><label for="edad">Edad</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="edad" autofocus="">
           </div>

           <div class="form-group">
                <strong><label for="horas_l">Horas Laboradas</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="horas_l" >
           </div>

           <div class="form-group">
                <strong><label for="pago_horas">Pago por hora</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="pago_horas" >
           </div>

           <div class="form-group">
                <strong><label for="extra">Horas extras</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="extra" >
           </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            
            </div>     
        </div>
    </div>

@endsection