<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-info border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="/" style="color:white">Miscelánea Flor</a></div>
      <div class="list-group list-group-flush">
        <a href="/producto" class="list-group-item list-group-item-action bg-info text-white">Productos</a>
        <a href="/proveedores" class="list-group-item list-group-item-action bg-info text-white">Proveedores</a>
        <a href="#" class="list-group-item list-group-item-action bg-info text-white">Operarios</a>
        <a href="#" class="list-group-item list-group-item-action bg-info text-white">Ventas</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper --> 
    
    
       


<body>
    
    <!-- /#wrapper -->
    <div id="page-content-wrapper">
            <nav style="width:100%" class="navbar navbar-expand-lg navbar-light bg-info text-white border-bottom">
                <h5>@yield('titulo')</h5>
            </nav>
        <div class="container-fluid">
          <div class="card" style="margin-top:20px">
            <div class="card-header bg-secondary text-white">
               <h4> @yield('pagetitle')</h4>
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
