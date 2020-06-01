@extends('menu')
@section('titulo','Operarios')
@section('pagetitle','Nuevo Operario')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="{{ route('operarios.nuevo') }}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group">
              <strong><label for="nombret">Nombre del operario</label></strong>
              <input class="form-control border rounded shadow-lg" autocomplete="off" type="text" name="nombret" required="" maxlength="150" autofocus="" > 
            </div>

            <div class="form-group">
                <strong><label for="telefonot">Teléfono</label></strong>
                <input type="text" class="form-control border rounded shadow-lg"  autocomplete="off" name="telefonot" autofocus="" >
           </div>

           <div class="form-group">
                <strong><label for="edad">Edad</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="edad" autofocus="" >
           </div>

           <div class="form-group">
                <strong><label for="horas_l">Horas Laboradas</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="horas_l" autofocus="">
           </div>

           <div class="form-group">
                <strong><label for="pago_horas">Pago por hora</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="pago_horas" autofocus="">
           </div>

           <div class="form-group">
                <strong><label for="extra">Horas extras</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="extra" >
           </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>
            
            </div>  
        </form><!--fin del form para la accion de enviar los valores-->   
        </div>
    </div>

@endsection