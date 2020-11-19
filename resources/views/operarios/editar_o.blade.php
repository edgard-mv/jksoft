@extends('menu')
@section('titulo','Trabajadores')
@section('pagetitle','Editar datos del trabajador')
@section('content')

    <div  class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="{{ route('operarios.editar', ['id' => $salario->trabajador_id]) }}" method="post">
                @csrf
                @method('PATCH')

            <div class="form-group">
              <strong><label for="nombret">Nombre del trabajador</label></strong>
            <input class="form-control border rounded shadow-lg"    autocomplete="off"  type="text" name="nombret" required="" maxlength="150" autofocus=""  value="{{$operador->nombre}}">

            </div>

            <div class="form-group">
                <strong><label for="telefonot">Teléfono</label></strong>
                <input type="text" class="form-control border rounded shadow-lg " autocomplete="off" name="telefonot" autofocus="" value="{{$operador->telefono}}">
           </div>

           <div class="form-group">
                <strong><label for="edad">Edad</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="edad" autofocus="" value="{{$operador->edad}}">
           </div>

           <div class="form-group">
                <strong><label for="horas_l">Horas Laboradas</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="horas_l" value="{{$salario->horas}}">
           </div>

           <div class="form-group">
                <strong><label for="pago_horas">Pago por hora</label></strong>
                <input type="number" class="form-control border rounded shadow-lg"  autocomplete="off" name="pago_horas" value="{{$salario->pago_por_hora}}">
           </div>

           <div class="form-group">
                <strong><label for="extra">Horas extras</label></strong>
                <input type="number" class="form-control border rounded shadow-lg" autocomplete="off" name="extra" value="{{$salario->extra}}" >
           </div>

            <div class="form-group" style="text-align:center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ url()->previous() }}" class="btn btn-default btn-danger">Cancelar</a>

            
            </div> 
        </form>    
        </div>
    </div>

@endsection