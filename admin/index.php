<?php
//seguridad de paginación
session_start();
error_reporting(0);
// if(!isset($_SESSION['rol'])){
//   header('location: ../index.php');
// }else{
//   if($_SESSION['rol'] != 1){
//     header('location: ../portal/index.php');
//   }
// }

if(!isset($_SESSION['usuario'])){
  header('location:../iniciarsesion.php');
  session__destroy();
  die();
}

include("../db.php");
include("conexion.php");
$user = $_SESSION['usuario'];
// $datos2 = "SELECT * FROM users where user ='$user'";
$datos2 = "SELECT * FROM users where user ='$user' OR email = '$user'";

$descarga = "SELECT COUNT(*) total FROM descargasweb";
$dd = mysqli_query($conexion, $descarga);
$descargacv  = mysqli_fetch_assoc($dd);

$u = "SELECT COUNT(*) total FROM users";
$uu = mysqli_query($conexion, $u);
$uuu  = mysqli_fetch_assoc($uu);

$cv1 = "SELECT COUNT(*) total FROM cv";
$cc = mysqli_query($conexion, $cv1);
$cvs  = mysqli_fetch_assoc($cc);

$dns = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];
$hoy = date("d-m-Y");
$inicio = date("01-m-Y");
$fin = date("t-m-Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Fabrizio Ferroni - Web Developer</title>
  <link rel="shortcut icon" href="dist/img/faviconff.ico" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/main.css">
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/faviconff.png" alt="Fabrizio Ferroni" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-dark navbar-expand navbar-danger dropdown-legacy border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="" href="cerrarsesion.php" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4 sidebar-no-expand">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="dist/img/faviconff.png" alt="Fabrizio Ferroni Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">Fabrizio Ferroni</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php $resultado2 = mysqli_query($conexion, $datos2);
            while($row2 = mysqli_fetch_assoc($resultado2)){
              if($row2["rutaimg"] == null){
                $avatar = "dist\img\avatar.png";
            ?>
          <img src="<?php echo $avatar;?>" class="img-circle elevation-2" alt="User Image">
          <?php }else{?>
          <img src="<?php echo $row2["rutaimg"];?>" class="img-circle elevation-2" alt="User Image">
          <?php }} mysqli_free_result($resultado2);?>
        </div>
        <div class="info">
        <?php $resultado2 = mysqli_query($conexion, $datos2);
            while($row2 = mysqli_fetch_assoc($resultado2)){
            ?>
          <a  class="d-block"><?php echo $row2["name"];?> <?php echo $row2["lastname"];; ?></a>  
          <?php } mysqli_free_result($resultado2);?>
          <!-- <a href="#" class="d-block">Fabrizio Ferroni</a>   -->
          <!-- tiene q venir por la bd el nombre -->
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tablero
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="descargas.php" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Descargas
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="subir-cv.php" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Subir Curriculum
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="usuarios.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tablero</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="index.php">Tablero</a></li> -->
              <li class="breadcrumb-item active">Tablero</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-microchip"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uso del CPU</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content --
            </div>
            <!-- /.info-box --
          </div> -->
          <!-- /.col -->

          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-percent"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Visitas del sitio</span>
                <span class="info-box-number">
                  150
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content --
            </div>
            <!-- /.info-box --
          </div>  -->
<!-- /.col -->
<?php 
                  $os = PHP_OS;
                  if (strtoupper(substr($os, 0, 3)) === 'WIN') {
              ?>
<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
             
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-windows"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sistema Operativo</span>
                <span class="info-box-number">
                  <!-- 150 -->
                  Windows Server
                  <!-- <small>%</small> -->
                </span>
            
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> 
          <?php }else if(strtoupper(substr($os, 0, 3)) === 'LIN'){?>

            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
             
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-ubuntu"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sistema Operativo</span>
                <span class="info-box-number">
                  <!-- 150 -->
                  Linux Server
                  <!-- <small>%</small> -->
                </span>
            
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> 
            <?php } ?>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-download"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Descargas</span>
                <span class="info-box-number"><?php echo $descargacv['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-upload"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CV Subidos</span>
                <span class="info-box-number"><?php echo $cvs['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1" ><i class="fas fa-users" ></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Usuarios</span>
                <span class="info-box-number"><?php echo $uuu['total']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <!-- Line chart -->
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                              
                  Cantidad de visitantes de la pagina: <a class="text-danger" href="<?php echo $dns; ?>" target="_blank"><?php echo $_SERVER['HTTP_HOST']; ?></a>  entre <?php echo $inicio; ?> al <?php echo $fin; ?>                  
                </h3>
              </div>
              <div class="card-body">
                <div class="formdate">
                  <form action="dashboard.php">
                              <input type="hidden" name="hoy" value="<?php echo $hoy ?>">
                              <div class="">
                                <div class="row">
                                    <div class="col-md-5">
                                      <p class="">
                                          <label>Desde: </label>
                                          <input class="form-control" type="date" name="inicio" value="<?php echo $inicio ?>">
                                      </p>
                                      </div>
                                      <div class="col-md-5">
                                      <p class="">
                                          <label>Hasta: </label>
                                          <input class="form-control" type="date" name="fin" value="<?php echo $fin ?>">
                                      </p>
                                      </div>
                                      <div class="col-md-2">
                                      <p class="">
                                        <br>
                                          <input type="submit" value="Filtrar" class="mtop8 w100 btn btn-success">
                                      </p>
                                      </div>
                                </div>
                              </div>
                          </form> 
                </div>
                <div class="chart">
                  <!-- <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->

                  <canvas id="myChart" class="tab-chart" width="5" height="5"></canvas>
                </div>
                
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            

          </div>
          <!-- /.col -->
          </div>



        <div class="row">
          <div class="col-md-12">
            <!-- Line chart -->
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Navegadores mas usado para ingresar la página
                </h3>

                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
              </div>
              <div class="card-body">
              <!-- <div class="formdate">
                  <form action="dashboard.php">
                              <input type="hidden" name="hoy" value="<?php echo $hoy ?>">
                              <div class="">
                                <div class="row">
                                    <div class="col-md-5">
                                      <p class="">
                                          <label>Desde: </label>
                                          <input class="form-control" type="date" name="inicio" value="<?php echo $inicio ?>">
                                      </p>
                                      </div>
                                      <div class="col-md-5">
                                      <p class="">
                                          <label>Hasta: </label>
                                          <input class="form-control" type="date" name="fin" value="<?php echo $fin ?>">
                                      </p>
                                      </div>
                                      <div class="col-md-2">
                                      <p class="">
                                        <br>
                                          <input type="submit" value="Filtrar" class="mtop8 w100 btn btn-success">
                                      </p>
                                      </div>
                                </div>
                              </div>
                          </form> 
                </div> -->
                
                <!-- <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> -->

                <canvas id="navweb"></canvas>
              
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

            

          </div>
          <!-- /.col -->
          </div>


     
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    <strong>Todos los derechos reservados. &copy; 2021 <a href="http://fabriziodeveloper.test" class="text-danger" target="_blank">Fabrizio Ferroni - Web Developer</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->






<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<script>
var ctx = document.getElementById('myChart');

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        // labels: ['25-07-2021', '26-07-2021', '27-07-2021', '28-07-2021', '29-07-2021', '30-07-2021', '31-07-2021'],
        labels: ['25-07-2021', '26-07-2021', '27-07-2021'],
        datasets: [{
            label: 'Visitas',
            // data: [12, 19, 3, 5, 2, 3],
            // data: [1, 10, 4, 50, 0, 15, 25],
            data: [28, 5, 9],
            backgroundColor: [
                'rgba(237,78,136, 0.2)',
                'rgba(237,78,136, 0.2)',
                'rgba(237,78,136, 0.2)',
                // 'rgba(255, 99, 132, 0.2)',
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(237,78,136, 1)',
                'rgba(237,78,136, 1)',
                'rgba(237,78,136, 1)',
                // 'rgba(255, 99, 132, 1)',
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
          yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            y: {
                beginAtZero: true
            }
        }
    }
});


var navweb = document.getElementById('navweb');

var navweb2 = new Chart(navweb, {
    type: 'pie',
    data: {
        labels: ['[1] Internet Explorer', '[19] Google Chrome', '[13] Mozilla Firefox', '[5] Microsoft Edge', '[2] Opera', '[10] Safari'],
        datasets: [{
            label: '# of Votes',
            data: [1, 19, 13, 5, 2, 10],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    // options: {
    //     scales: {
    //       yAxes: [{
    //                 ticks: {
    //                     beginAtZero: false,
    //                     display: false
    //                 }
    //             }],
          
    //         y: {
    //             beginAtZero: true
    //         }
    //     },
    // }
});
</script>
</body>
</html>
