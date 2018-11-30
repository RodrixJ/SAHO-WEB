
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link rel="stylesheet" href="datos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- link calendar resources -->
  <link rel="stylesheet" type="text/css" href="tcal.css" />
  <script type="text/javascript" src="tcal.js"></script> 

    <title>Registros del hotel</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <!--nombre del hotel y opcion de abandonar sesion-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="padding-left: 95px;">SAHO</a>
      
      <!-- boton de salir-->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="destruir.php">Salir</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- sidebar -->
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">

            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
            </br></br>
            <!-- logo del sistema-->
            <img src="imagenes/hotel.png"  alt="logohotel"></br></br>
            <!--inicio del sidebar-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted border-top">
              <span>Reportes Guardados</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text" ></span>
                  Mes actual
                </a>
              </li>
      
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  reporte del dia
                </a>
              </li>
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ultimo año
                </a>
              </li>
              <li class="nav-item border-bottom">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Ingresos Totales
                </a>
              </li>
            </ul>
          </div>
        </nav>

        </br></br>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        </br></br></br>
          <!-- Titulo de la grafica -->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Grafica de estadisticas</h1>
          </div>

          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
          <!--cabecera de la tabla-->
          <h2>Datos de los clientes</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                  <tr>
                    <th>identificacion</th>
                    <th>Sexo</th>
                    <th>Nacionalidad</th>
                    <th>Nombre y Apellido</th>
                    <th>fecha de entrada</th>
                    <th>fecha de salida</th>
                    <th>Gasto Total</th>
                  </tr>
                  <tr>
               <!-- muestra de informacion de la base de datos -->
                  <?php  
                    include("conexion.php");
                                        
                      //CONSULTAR
                      $resultados = mysqli_query($conexion,"select cliente.nombres_apellidos, cliente.nacionalidad, habitacion.tipo_habitacion, habitacion.precio, reserva.fecha_entrada, reserva.fecha_salida, reserva.gasto_total FROM cliente INNER JOIN reserva ON cliente.cedula_pasaporte = reserva.cedula_pasaporte INNER join habitacion on cliente.cedula_pasaporte=habitacion.cedula_pasaporte");
                      $consulta = mysqli_fetch_array($resultados);
                      do{
                   ?>
                      <th><?php echo $consulta['precio']; ?></th>
                      <th><?php echo $consulta['tipo_habitacion']; ?></th>
                      <th><?php echo $consulta['nacionalidad']; ?></th>
                      <th><?php echo $consulta['nombres_apellidos']; ?></th>
                      <th><?php echo $consulta['fecha_entrada']; ?></th>
                      <th><?php echo $consulta['fecha_salida']; ?></th>
                      <th><?php echo $consulta['gasto_total']; ?></th>


                  </tr>
                  <?php
                    }while($consulta = mysqli_fetch_array($resultados));
                  ?>
              </thead>
            
            </table>             
           </div>
          </main> <!--fin del contenedor main-->
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- van al final para que la pagina cargue mas rapido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    

<script>
 
 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
