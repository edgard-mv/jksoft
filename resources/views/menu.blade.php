<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Productos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Proveedores</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Operarios</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Ventas</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

<body>
     <!-- Page Content -->
     <div id="page-content-wrapper">

     <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <h3>Sistema de inventario de Miscelamea Flor</h3>
     </nav>

    <div class="container">
        @yield('body')
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


   
</body>
</html>
