@extends('menu')
@section('titulo','Trabajadores')
@section('pagetitle','Nuevos datos de trabajador')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="{{ route('operarios.nuevo') }}" method="post">
           @csrf
           @method('PUT')

           <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title" style="margin-bottom: 30px">DATOS PERSONALES</h5>
                <div class="form-group">
                    <strong><label for="nombret">Nombres y apellidos</label></strong>
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
            </div>
              <div class="card-footer bg-success">
                <h4 class="text-white"><strong>  1 </strong></h4>
              </div>
            </div>

            <div class="card" >
              <div class="card-body">
                <h5 class="card-title" style="margin-bottom: 30px">DATOS LABORALES</h5>
                <div class="form-group">
                    <strong><label for="horas_l">Horas laboradas</label></strong>
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
    

            </div>
              <div class="card-footer bg-success">
                <h4 class="text-white"><strong>  2  </strong></h4>
              </div>
            </div>
           </div>

           <div class="form-group" style="text-align:center; margin-top: 30px">
            <button class="btn btn-primary" type="submit">
                <span class="fas fa-save"></span>
                <strong>Guardar</strong>
            </button>
            <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">
                <span class="fas fa-times"></span>
                <strong>Cancelar</strong></a>
        
        </div>  
        </form><!--fin del form para la accion de enviar los valores-->   
        </div>
    </div>

@endsection