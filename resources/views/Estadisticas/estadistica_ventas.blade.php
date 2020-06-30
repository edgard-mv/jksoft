@extends('menu')
@section('titulo',"Estadística de ventas")
@section('content')


<head>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>

</head>

<div class="page-breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Estadística </li>
            <li class="breadcrumb-item active" aria-current="page">Ventas</li>
        </ol>
    </nav>
  </div>
  
  <div class="jumbotron " style="background-image:url(/images/bkventas.png);background-size:cover">
    <div class="container">
          <h4 style=" font-family: monospace;">Selección de rango de fechas</h4>
      <h6 class="display-5 ">
        <div class="form-group">
          <form  action="{{route('estadistica.actualizar.ventas')}}" method="get" >
          <strong><label for="fechainicio" >Fecha de inicio:</label></strong>
          <input type="date" required name="fechainicio" id="fechainicio" min="2019-08-04" max="2020-07-31" >
  
          <strong><label for="fechafin" style="margin-left: 10px">Fecha de fin:</label></strong>
          <input type="date" name="fechafin" id="fechafin" min="2019-08-04" max="2020-07-31"  value="<?php echo date("Y-m-d"); ?>" >
  
          <button type="submit"  class="btn btn-danger rounded"><i class="fas fa-retweet"></i></button>
  
          </form>
          <hr class="my-4" style="height: 1px;background-color:rgb(174, 173, 233);">
        </div>
      </h6>


      <!--Contenido-->
      <div class="row">
            <h3 class="divisiones"><i class="fas fa-shopping-cart"></i> VENTAS AL CONTADO: 
                @foreach($contados as $cont)
                {{$cont->ventasobtenidas}}
                @endforeach
            </h3>
      </div>


      <div class="row">
        <div class="col-lg-3 col-md-6 ">
            <div class="card border rounded p-3  borders border-danger">
                <h2 class="card-header-ventas rounded pt-3">INGRESO</h2>
                <div class="card-ventas">
                    <div class="stat-text"><span class="count">
                        @foreach($contados as $cont)
                        C$ {{$cont->total}}
                        @endforeach    
                    </span></div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <div class="card border rounded p-3  borders border-danger">
                <h2 class="card-header-ventas rounded pt-3">MÁXIMO</h2>
                <div class="card-body-ventas">
                    <div class="stat-text"><span class="count">
                        @foreach($contados as $cont)
                       C$ {{$cont->maximo}}
                    @endforeach</span></div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <div class="card border rounded p-3  borders border-danger">
                <h2 class="card-header-ventas rounded pt-3">PROMEDIO</h2>
                <div class="card-body-ventas">
                     <div class="stat-text"><span class="count">@foreach($contados as $cont)
                    C$ {{$cont->promedio}}
                    @endforeach
                    </span></div>
                           
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-6">
            <div class="card border rounded p-3  borders border-danger">
                <h2 class="card-header-ventas rounded pt-3">MINIMO</h2>
                <div class="card-body-ventas">
                   
                   <div class="stat-text"><span class="count">
                    @foreach($contados as $cont)
                    C$ {{$cont->minimo}}
                    @endforeach      
                  </span></div>

                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-header-graficos">Rango de ingresos obtenidos</h5>
                <div class="card-body">
                  <canvas id="popChart" width="200" height="50"></canvas>

                  <script>

                      var popCanvas = $("#popChart");
                      var popCanvas = document.getElementById("popChart");
                      var popCanvas = document.getElementById("popChart").getContext("2d");

                      var lineChart = new Chart(popCanvas, {
                      type: 'line',
                      data: {
                          labels: [
                          <?php foreach($chartcontados as $contado):?>
                          <?php echo $contado->venta_id?>,      
                          <?php endforeach; ?>
                          ],
                          datasets: [{
                          label: 'Monto de ventas realizadas C$',
                          data: [
                          <?php foreach($chartcontados as $contado):?>
                          <?php echo $contado->monto?>,      
                          <?php endforeach; ?>
                          ],
                          
                          backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                            }]
                        }
                      });

                      
                  </script>
                </div>
              </div>
                </div>           
    </div>

    <div class="row">
        <h3 class="divisiones"><i class="fas fa-shopping-cart"></i> VENTAS AL CRÉDITO:  @foreach($creditos as $cre)
                    {{$cre->ventasobtenidas}}
                   @endforeach</h3>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-6 ">
        <div class="card border rounded p-3  borders border-success">
            <h2 class="card-header-ventas-credito rounded pt-3">INGRESO</h2>
            <div class="card-body-ventas">
                <div class="stat-text"><span class="count">
                    @foreach($creditos as $cre)
                    C$ {{$cre->total}}
                   @endforeach
                </span></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card border rounded p-3  borders border-success">
            <h2 class="card-header-ventas-credito rounded pt-3">MÁXIMO</h2>
            <div class="card-body-ventas">
                            <div class="stat-text"><span class="count">
                                @foreach($creditos as $cre)
                                    C$ {{$cre->maximo}}
                                @endforeach
                            </span></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card border rounded p-3  borders border-success">
            <h2 class="card-header-ventas-credito rounded pt-3">PROMEDIO</h2>
            <div class="card-body-ventas">
                 <div class="stat-text"><span class="count">
                    @foreach($creditos as $cre)
                    C$ {{$cre->promedio}}
                    @endforeach
                 </span></div>
                       
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card border rounded p-3  borders border-success">
            <h2 class="card-header-ventas-credito rounded pt-3">MINIMO</h2>
            <div class="card-body-ventas">
               
               <div class="stat-text"><span class="count">
                @foreach($creditos as $cre)
                    C$ {{$cre->minimo}}
                @endforeach
               </span></div>

            </div>
        </div>
    </div>
</div>

  </div>

  <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5 class="card-header-graficos">Rango de ingresos obtenidos</h5>
                <div class="card-body">
                  <canvas id="ChartCre" width="200" height="50"></canvas>

                  <script>

                      var popCanvas = $("#ChartCre");
                      var popCanvas = document.getElementById("ChartCre");
                      var popCanvas = document.getElementById("ChartCre").getContext("2d");

                      var lineChart = new Chart(popCanvas, {
                      
                        type: 'bar',
                                data: {
                                    labels: [
                                        <?php foreach($chartcreditos as $credito):?>
                                        <?php echo $credito->identificador?>,      
                                        <?php endforeach; ?>
                                    ],
                                    datasets: [{
                                    label: 'ABONO C$',
                                    data: [
                                        <?php foreach($chartcreditos as $credito):?>
                                        <?php echo $credito->totales?>,      
                                        <?php endforeach; ?>
                                    ],
                                    backgroundColor: "rgba(153,255,51,1)"
                                    }, {
                                    label: 'MONTO TOTAL C$',
                                    data: [
                                        <?php foreach($chartcreditos as $credito):?>
                                        <?php echo $credito->monto_total?>,      
                                        <?php endforeach; ?>
                                    ],
                                    backgroundColor: "rgba(255,153,0,1)"

                                    }]
                                }
                                });
                      
                  </script>
                </div>
              </div>
                </div>       
    </div>





@endsection