@extends('menu')
@section('titulo',"Estadística de proveedores ")
@section('content')


<head>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>

</head>

<div class="page-breadcrumb">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item">Estadística </li>
          <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
      </ol>
  </nav>
</div>

<div class="jumbotron " style="background-image:url(/images/bkjumbotron.png);background-size:cover">
  <div class="container">
    <h6 class="display-5 ">
      <div class="form-group">
        <form  action="{{route('estadistica.proveedores.actualizar')}}" method="get" >
        <strong><label for="fechainicio">Fecha de inicio:</label></strong>
        <input type="date" name="fechainicio" id="fechainicio" min="2019-08-04" max="2020-07-31" value="2020-01-01" step="1">

        <strong><label for="fechafin" style="margin-left: 10px">Fecha de fin:</label></strong>
        <input type="date" name="fechafin" id="fechafin" min="2019-08-04" max="2020-07-31" step="1"  value="<?php echo date("Y-m-d"); ?>" >

        <button type="submit" class="btn btn-danger rounded"><i class="fas fa-retweet"></i></button>

        </form>
      </div>

    </h1>
    <hr class="my-4" style="height: 1px;background-color:goldenrod;">
    <div class="row">
      <div class="col-lg-12 col-xl-6">
          <div class="main-card mb-3 card shadow-lg border border-primary">
              <div class="card-body ">
                  <h5 class="card-title "><strong>PROVISIÓN TOTAL</strong></h5>
                  <div>
                      <div >
                        <canvas id="doughnut-chart" width="800" height="400"></canvas>
                        <script>
                            new Chart(document.getElementById("doughnut-chart"), {
                            type: 'doughnut',
                            data: {
                              labels: [
                                <?php foreach($chart_providers as $cp):?>
                                  "<?php echo $cp->nombre?>",      
                                 <?php endforeach; ?>
                              ],
                              datasets: [
                                {
                                  
                                  backgroundColor: ["#AD180F", "#199C0E","#0E889A","#0D4092","#6A0D92"],
                                  data: [
                                    <?php foreach($chart_providers as $cp):?>
                                    <?php echo $cp->total?>, 
                                    <?php endforeach; ?> 

                                  ],
                                  hoverBackgroundColor: [
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16',
                                          '#D7AD16'
                                   ]
                                }
                              ]
                            },
                            options: {
                              
                              responsive: true,
                              
                              legend: {
                                   position: 'bottom',   
                                   fontSize:12                             
                                     },
                              title: {
                                display: true,
                                text: 'Producto por proveedor'
                              },
                              borderWidth: 3,
                              animation: {
                               animateRotate: true,
                               animateScale: true
                               },
                              rotation: -Math.PI,
                              cutoutPercentage: 80,
                              circumference: Math.PI
                            }
                        });

                       </script>
                      </div>
                  </div>
              </div>
          </div>
      </div> 

      <div class="col-lg-12 col-xl-6">
          <div class="card shadow-none" style="margin-top:40px;background-color:transparent">
              <div class="grid-menu grid-menu-2col">
                  <div class="row">

                      <div class="col-sm-6" style="margin-top: 15px">
                        <div class="card shadow-lg  border border-success">
                          <div class="card-body ">
                            <h5 class="card-title"><strong>TOTAL</strong></h5>
                            <hr id="cardhr" class="my-3" style="  height: 1px;background-color:green;">
                            <h6 class="card-subtitle mb-2 text-muted">Proveedores</h6>
                            <h3 class="card-text text-right text-success">
                            <strong>
                              @foreach ( $total_proveedor as $totales)
                              {{$totales->total_p}}
                              @endforeach
                            </strong>
                              </h3>


                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6" style="margin-top: 15px">
                        <div class="card shadow-lg border border-dark" >
                          <div class="card-body">
                            <h5 class="card-title"><strong>FECHA</strong></h5>
                            <hr class="my-3" style="  height: 1px;background-color:grey;">
                            <h6 class="card-subtitle mb-2 text-muted">Último pedido realizado</h6>
                            <h3 class="card-text text-right text-dark">
                            <strong>
                              <?php foreach($lastdate as $ld):?>
                                  <?php echo $ld->fechas?>   
                               <?php endforeach; ?>
                            </strong>
                            </h3>
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-12">
                          <div class="card shadow-lg border border-warning">
                            <div class="card-body">
                              <h5 class="card-title"><strong>EMPRESA</strong></h5>
                              <hr class="my-3" style="  height: 1px;background-color:yellow;">
                              <h6 class="card-subtitle mb-2 text-muted">Nombre de las empresas con mayor y menor provisión de productos</h6>
                            
                              <div class="grid-menu grid-menu-2col">
                                <div class="col-sm-11" style="float: right">
                                  <h6>
                                    @foreach ( $rangos as $valor_maximo)
                                     {{$valor_maximo->empresa}} <i class="fas fa-long-arrow-alt-right" style="color: black;margin-left:10px;"></i>       {{  $valor_maximo->total}}
                                     <br><br>

                                    @endforeach
                                  </h6>
                                
                                </div>

                                <div class="col-sm-1" style="float: left">

                                  <h5><span class="badge badge-danger"><i class="fas fa-minus"></i></span></h5>
                                  <span class="badge badge-success"><i class="fas fa-plus"></i></span>

                                </div>
                              </div>
                            </div>


   
    
  </div>
</div>
 
@endsection  