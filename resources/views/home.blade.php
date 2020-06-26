@extends('menu')
@section('titulo',"Estadística de productos ")
@section('content')


<head>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




</head>


<div style="background-image:url(/images/bkproducts.png);background-size:cover">
  <div>
      <div class="container-fluid ">
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

                           <div class="form-group">
                                <form  action="{{route('estadistica.proveedores.actualizar')}}" method="get" >
                                <strong><label for="fechainicio">Fecha de inicio:</label></strong>
                                <input type="date" name="fechainicio" id="fechainicio" min="2019-08-04" max="2020-07-31" value="2020-01-01" step="1">

                                <strong><label for="fechafin" style="margin-left: 10px">Fecha de fin:</label></strong>
                                <input type="date" name="fechafin" id="fechafin" min="2019-08-04" max="2020-07-31" step="1"  value="<?php echo date("Y-m-d"); ?>" >

                                <button type="submit" class="btn btn-danger rounded"><i class="fas fa-retweet"></i></button>

                                </form>
                            </div>
                          <hr class="my-4" style="height: 1px;background-color:rosybrown;">

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
                                type: 'horizontalBar',
                                data: {
                                    labels: [
                                     "Máximo","Promedio","Mínimo"
                                    ],
                                    datasets: [{
                                    label: 'Precios c$',
                                    data: [
                                    <?php foreach($prod as $cp):?>
                                    <?php echo $cp->maximo?>,
                                    <?php echo $cp->promedio?>, 
                                    <?php echo $cp->minimo?>,       
                                    <?php endforeach; ?>
                                    ],
                                    
                                    backgroundColor: [
                                        'rgba(255, 200, 132, 0.6)',
                                        'rgba(255, 200, 132, 0.6)',
                                        'rgba(255, 200, 132, 0.6)'
                                    ]
                                    }]
                                }
                                });

                                
                            </script>
                          </div>
                        </div>
                    </div>


                   


     


@endsection
