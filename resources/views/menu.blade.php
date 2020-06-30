<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core -->
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

      <!-- Custom styles for this template -->
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> --}}

</head>

<header>
  <div class="left_area">
    <h3>Miscelánea</h3>
    <h3><span>Flor</span></h3>
  </div>
</header>

<div class="sidebar">
  <center>
    <h4><i class="fas fa-landmark"></i></h4>
  </center>

  <a href="{{ route('producto.todos') }}"><i class="fas fa-apple-alt"></i><span>Productos</span></a>
  <a href="{{ route('proveedor.todos') }}"><i class="fas fa-box-open"></i><span>Proveedores</span></a>
  <a href="{{ route('operarios.todos') }}"><i class="fas fa-user-tie"></i><span>Trabajadores</span></a>
  <a href="{{ route('venta.todos') }}"><i class="fas fa-coins"></i><span>Ventas</span></a>
  
<!--Dropdown de las estadisticas -->

<div class="btn-group " style="width: 100%" >
  <button type="button" class="btn dropdown-toggle" style="color: white;font-size: 17px;line-height: 40px; padding-right: 40px;" 
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-chart-line"></i><span>Estadísticas </span></button>

  <div class="dropdown-menu"  style="background-color:black ;font-size:14px;margin-left:95px">
    <a class="dropdown-item hover-item" href="{{route('estadistica.productos') }}">Productos</a>
    <a class="dropdown-item" href="{{route('estadistica.proveedores')}}">Proveedores</a>
    <a class="dropdown-item" href="{{route('estadistica.ventas')}}">Ventas</a>
  </div>
</div>


 <!--Item de Copia de seguridad -->

<a href="{{route('backup')}}"><i class="fas fa-database"></i><span>Copia de seguridad</span></a>
 <a href="/manualu"><i class="fas fa-book-reader"></i><span>Manual de usuario</span></a>


</div>





    
    <!-- /#sidebar-wrapper --> 
    

<body>
    
    <!-- /#wrapper -->
    <div class="content">
            <nav style="width:100%;text-transform: uppercase; text-align: center;padding-top:32px" class="navbar navbar-expand-lg navbar-light text-white border-bottom">
                <h4>@yield('titulo')</h4>
            </nav>
        <div class="container-fluid" style="margin-top: 50px">
          <div class="card" style="margin-top:20px">
            <div class="card-header bg-warning text-black" style="text-transform: uppercase;">
               <h5> @yield('pagetitle')</h5>
            </div>
            <div class="card-body">
                 @yield('content')
            </div>
            </div>
         <!-- /#page-content-wrapper -->
    
        </div>
    </div>
   

 
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}

</body>
</html>
