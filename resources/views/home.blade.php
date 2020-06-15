@extends('menu')
@section('titulo',"Estadística de productos ")
@section('content')


<head>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




</head>


<div class="dashboard-wrapper">
  <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content ">
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="page-header">
                      <p class="pageheader-text">Datos generales de operaciones efectuadas en base a los productos</p>
                      <div class="page-breadcrumb">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item">Estadística </li>
                                  <li class="breadcrumb-item active" aria-current="page">Productos</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->

          <div class="ecommerce-widget">

              <div class="row"><!-- Card del Total de productos-->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card border-5 border-top border-primary">
                          <div class="card-body">
                              <h5 class="text-muted">Total de Productos</h5>
                              <div class="metric-value d-inline-block">
                                  <h1 class="mb-1">@foreach ( $prod as $pastels)
                                    {{$pastels->total}}
                                    @endforeach</h1>
                              </div>
                              <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                  <span><i class="fa fa-fw fa-arrow-up"></i>
                              </div>
                          </div>
                          <div id="sparkline-revenue"></div>
                      </div>
                  </div>

          <!-- ============================================================== -->


                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card border-top border-success">
                          <div class="card-body">
                              <h5 class="text-muted">Promedio de precios</h5>
                              <div class="metric-value d-inline-block">
                                  <h1 class="mb-1">@foreach ( $prod as $pastels)
                                    C${{$pastels->promedio}}
                                    @endforeach</h1>
                              </div>
                              <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                  <span><i class="fa fa-fw fa-arrow-up"></i></span>
                              </div>
                          </div>
                          <div id="sparkline-revenue2"></div>
                      </div>
                  </div>


          <!-- ============================================================== -->


                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card border-top border-dark">
                          <div class="card-body ">
                              <h5 class="text-muted">Rango de precios</h5>
                              <div class="metric-value d-inline-block">
                                  <h1 class="mb-1"> 
                                    @foreach ( $prod as $pastels)
                                    C${{$pastels->minimo}}- C${{$pastels->maximo}}
                                    @endforeach

                                  </h1>
                              </div>
                              <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                              </div>
                          </div>
                          <div id="sparkline-revenue3"></div>
                      </div>
                  </div>

               <!-- ============================================================== -->


                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card border-top border-danger">
                          <div class="card-body">
                              <h5 class="text-muted">Mayor cantidad en stock</h5>
                              <div class="metric-value d-inline-block">
                                  <h1 class="mb-1">
                                    @foreach ( $prod as $pastels)
                                     {{$pastels->stockmayor}} uds.
                                    @endforeach
                                  </h1>
                              </div>
                            
                          </div>
                          <div id="sparkline-revenue4"></div>
                      </div>
                  </div>
              </div>



              <div class="row">
                  <!--  ============================================================== -->
            
                  <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header"><strong> Productos con stock menor a 5 unidades</strong></h5>
                          <div class="card-body p-0">
                              <div class="table-responsive  table-striped">
                                  <table class="table">
                                      <thead >
                                          <tr class="border-0">
                                              <th class="border-0"></th>
                                              <th class="border-3"><strong>Nombre</strong></th>
                                              <th class="border-3"><strong>Cantidad</strong></th>

                                          </tr>
                                      </thead>
                                      @foreach ( $stockminimo as $sminimo)
                                      <tbody>
                                          <tr>
                                              <td><span class="fa-xs text-danger mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span></td>
                                              <td>{{$sminimo->nombre}}</td>
                                              <td>{{$sminimo->cantidad}}</td>
                                          </tr>
                                      </tbody>
                                      @endforeach
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end recent orders  -->


                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- customer acquistion  -->
                  <!-- ============================================================== -->
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header">Rango de precios</h5>
                          <div class="card-body">
                            <canvas id="popChart" width="200" height="354"></canvas>

                            <script>

                                var popCanvas = $("#popChart");
                                var popCanvas = document.getElementById("popChart");
                                var popCanvas = document.getElementById("popChart").getContext("2d");

                                var barChart = new Chart(popCanvas, {
                                type: 'bar',
                                data: {
                                    labels: ["1-40", "40-80", "80'270"],
                                    datasets: [{
                                    label: 'Precios',
                                    data: [1379302771, 1281935911, 326625791],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.6)',
                                        'rgba(54, 162, 235, 0.6)',
                                        'rgba(255, 206, 86, 0.6)',
                                        'rgba(75, 192, 192, 0.6)',
                                        'rgba(153, 102, 255, 0.6)',
                                        'rgba(255, 159, 64, 0.6)',
                                        'rgba(255, 99, 132, 0.6)',
                                        'rgba(54, 162, 235, 0.6)',
                                        'rgba(255, 206, 86, 0.6)',
                                        'rgba(75, 192, 192, 0.6)',
                                        'rgba(153, 102, 255, 0.6)'
                                    ]
                                    }]
                                }
                                });

                                
                            </script>
                          </div>
                        </div>
                    </div>


                    <script type="text/javascript">


                        google.charts.load("current", {packages:["corechart"]});
                        google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Task', 'Hours per Day'],
                           @foreach ( $circularchart as $pastels)
                           ['{{$pastels->empresa}}', {{$pastels->total}}],
                           @endforeach
                    
                        ]);
                    
                        var options = {
                          title: 'Porcentaje total de productos distribuidos por cada empresa proveedora',
                          is3D: true,
                          colors: ['#F61C40', '#F53656', '#F64664', '#F6677F', '#F38194'],
                          };
                    
                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                      }
                    
                    
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Task', 'Hours per Day'],
                           @foreach ( $circularchart as $pastels)
                           ['{{$pastels->empresa}}', {{$pastels->total}}],
                           @endforeach
                    
                        ]);
                    
                        var options = {
                          title: '',
                          is3D: true,
                          colors: ['#F61C40', '#A9E3FB', '#F3F6C1', '#EBCFF4', '#F38194']
                          };
                    
                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                      }
                    
                    </script>

              <!--Cards de los google charts -->

      <div class="row">
        <!-- ============================================================== -->
   
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
            <div class="card border border-dark bg-light ">
                <h5 class="card-header"> <strong><i class="fas fa-balance-scale-right"></i> Porcentaje total de productos distribuidos por cada empresa</strong></h5>
                <div class="card-body">
                    <div class="card-body" id="piechart_3d" style="width: 600px; height: 400px; margin-top:40px">
                    </div>                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
            <div class="card bg-secondary text-secondary rounded-circle">
                <div class="card-header">
                    
                    <h5 class="mb-0"> <span class="badge-dot badge-secondary mr-1"></span><strong> TOTAL </strong></h5>
                </div>
                <div class="card-body">

                    <div class="card border-bottom border-primary mb-3 rounded" style="max-width: 18rem;">
                        <div class="card-body text-dark">
                          <h5 class="card-title text-dark">Empresas proveedoras</h5>
                          <p class="card-text">
                                <h2><strong>
                                    @foreach ( $total_proveedor as $totales)
                                    {{$totales->total_p}}
                                    @endforeach</h2>

                                </strong></h5>

                          </p>
                        </div>
                      </div>

                    <div class="ct-chart-product ct-golden-section"></div>
                </div>
            </div>
        </div>

      </div>
   


@endsection
