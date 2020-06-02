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
  <a href="{{ route('productos') }}"><i class="fas fa-apple-alt"></i><span>Productos</span></a>
  <a href="{{ route('proveedores') }}"><i class="fas fa-box-open"></i><span>Proveedores</span></a>
  <a href="{{ route('operarios') }}"><i class="fas fa-user-tie"></i><span>Trabajadores</span></a>
  <a href="/ventas"><i class="fas fa-coins"></i><span>Ventas</span></a>
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
