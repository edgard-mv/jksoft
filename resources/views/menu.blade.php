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
  <a href="{{ route('operarios') }}"><i class="fas fa-user-tie"></i><span>Trabajadores</span></a>
  <a href="{{ route('venta.todos') }}"><i class="fas fa-coins"></i><span>Ventas</span></a>
  
<!--Dropdown de las estadisticas -->

<div class="btn-group " >
  <button type="button" class="btn" style="color: white;font-size: 17px;padding-left:40px;line-height: 40px;  width: 100%;" >
    <i class="fas fa-chart-line"></i><span> Estadísticas </span></button>
  <button type="button" style="color: white" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only"></span>
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#2f323a;font-size:10px">
    <a class="dropdown-item" href="{{ route('inicio') }}">E.PRODUCTOS</a>
  <a class="dropdown-item" href="{{route('estadistica.proveedores')}}">E.PROVEEDORES</a>
    <a class="dropdown-item" href="#">E.VENTAS</a>
  </div>
</div>


 <!--Item de Copia de seguridad -->

 <a href="/backup"><i class="fas fa-database"></i><span>Copia de seguridad</span></a>
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
   

 
   
</body>
</html>
