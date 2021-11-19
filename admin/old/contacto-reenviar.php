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
$id = $_GET["id"];
$datos = "SELECT * FROM contacto WHERE id='$id'";
$user = $_SESSION['usuario'];
// $datos2 = "SELECT * FROM users where user ='$user'";
$datos2 = "SELECT * FROM users where user ='$user' OR email = '$user'";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
  <title>Reenviar mail de <?php echo $row["name"]; ?> <?php echo $row["lastname"];?> | Fabrizio Ferroni - Web Developer</title>
  <?php } ?>
  <link rel="shortcut icon" href="dist/img/faviconff.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" type="text/css" href="dist/DataTables/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="dist/DataTables/dataTables-1.10.25/css/dataTables.bootstrap5.min.css"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css"> -->

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
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tablero
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacto.php" class="nav-link active">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Contacto
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="descargas.php" class="nav-link ">
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
          <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
            <h1 class="m-0">Reenviar email de: <?php echo $row["name"];?> <?php echo $row["lastname"];?></h1>
            <?php } ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item"><a href="contacto.php">Contacto</a></li>
              <li class="breadcrumb-item active">Reenviar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-danger card-outline">
      <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
              <div class="card-header">
                <h3 class="card-title">RV: <?php echo $row["subject"];?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">              
                  <input type="email" class="form-control" placeholder="Para:" >                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Asunto:" value="RV: <?php echo $row["subject"];?>">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 400px">
                      <br><br>
                      <img class="img-firma" src="../assets/img/faviconff2.png" alt=""> <br>
                      <p class="p-firma"> Web: <a class="a-firma" href="https://fabrizioferroni.com.ar">https://fabrizioferroni.com.ar</a></p>  
                      <p class="p-firma">Tel: <a class="a-firma" href="tel:+543535693037">(54) 353 5693037</a></p>  
                      <p class="p-firma">Mail: <a class="a-firma" href="mailto:fabrizioferroni@outlook.com">fabrizioferroni@outlook.com</a></p>
                      <hr>
                      <b>De:</b> <?php echo $row["name"];?> <?php echo $row["lastname"];?> &lt; <?php echo $row["email"];?> &gt; <br>
                      <b>Enviado:</b> <?php echo $row["dia"];?>, <?php echo $row["fechadecont"];?> <?php echo $row["horadecontacto"];?><br>
                      <b>Para:</b> Fabrizio Ferroni &lt; info@fabrizioferroni.com.ar &gt; <br>
                      <b>Asunto: </b><?php echo $row["subject"];?> <br>
                       <?php echo $row["message"];?>
                    </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fas fa-paperclip"></i> Adjunto archivo
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                <button type="reset" onclick="volveramail();" class="btn btn-warning"><i class="fas fa-times"></i> Descartar</button>
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-reply"></i> Responder</button> 
                <button type="button" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Borrador</button>                 
              </div>
              <?php } ?>
              <!-- /.card-footer -->
            </div>



        <!-- Info boxes -->

     
     
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->



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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<script type="text/javascript" src="dist/DataTables/datatables.min.js"></script>
<!-- <script type="text/javascript" src="dist/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script> -->
<!-- <script type="text/javascript" src="dist/DataTables/dataTables-1.10.25/js/dataTables.bootstrap5.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/main.js"></script>
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/summernote/lang/summernote-es-ES.js"></script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote({ 
      placeholder: "Hello stand alone ui",
      lang: "es-ES"
    });
  });
function volveramail(){
  window.location="contacto.php";
  // history.go(-1)
}

</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
