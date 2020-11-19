@extends('menu')
@section('titulo',"Copia de seguridad")
@section('content')


<head>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

</head>

<div class="card border border-primary text-center">
    <div class="card-header bg-primary border-info">
    </div>
    <div class="card-body">
      <h5 class="card-title"><strong>Creación de copia de seguridad</strong></h5>
      <p class="card-text">Al presionar el botón de crear copia de seguridad se efectuará a respaldar los datos existentes en la base de datos 
          que utiliza el sistema </p>
      <a href="{{route('backup.save')}}" class="btn btn-primary"> <i class="fas fa-download"></i> Copia de seguridad</a>
    </div>
  </div>
  
@endsection  