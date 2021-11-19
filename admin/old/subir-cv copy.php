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
$datos = "SELECT * FROM cv";
$datos2 = "SELECT * FROM users";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subir Curriculum Vitae | Fabrizio Ferroni - Web Developer</title>
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
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

   
  
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
          <img src="dist/img/yo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <?php $resultado2 = mysqli_query($conexion, $datos2);
            while($row2 = mysqli_fetch_assoc($resultado2)){
            ?>
          <a href="perfil.php" class="d-block"><?php echo $row2["name"];?> <?php echo $row2["lastname"];; ?></a>  
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
            <a href="descargas.php" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Descargas
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="subir-cv.php" class="nav-link active">
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
            <h1 class="m-0">Subir Curriculum Vitae</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Subir Curriculum Vitae</li>
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
        <div class="card">
          <div class="card-header">
              <div class="card-title"><i class="fas fa-upload"></i> Subir Curriculum Vitae</div>

              <button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i>  Agregar nuevo</button>
            
          </div>
          <div class="card-body">

          <!-- <caption>
                     <button class="btn btn-success mibtn" data-bs-toggle="tooltip" data-placement="top" title="Agregar Nuevo" type="button"><i class="fas fa-plus"></i>  Agregar nuevo</button>
                     <!-- data-toggle="tooltip" data-placement="bottom" title="Agregar Nuevo"
                     title="Agregar Nuevo"
                     --
                 </caption> -->
              <table id="example" class="display table table-bordered table-striped table-hover text-nowrap" style="width:100%; ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ruta</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th width="50">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["ruta"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td><a href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-placement="top" title="Ver" ><i class="fas fa-eye"></i></a> <a href="subir-cv/editar.php?=<?php echo $row["id"];?>" class="btn btn-info" data-bs-toggle="tooltip" data-placement="top" title="Editar" ><i class="fas fa-pen"></i></a> <a href="#" target="_blank" class="btn btn-danger" data-bs-toggle="tooltip" data-placement="top" title="Borrar" ><i class="fas fa-trash"></i></a></td> 
                       
                    </tr>
                    <?php } mysqli_free_result($resultado);?>
                  </tbody>
                  </table>
          </div>
        </div>

     
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-id-badge"></i> Subir Curriculum Vitae</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="name" class="form-label">Nombre</label>
          <div class="input-group mb-3">
            
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
            <input type="text" class="form-control" placeholder="Ingrese un Nombre" name="name" id="name" aria-label="Ingrese un Nombre" aria-describedby="basic-addon1">
          </div> 
          
          <label for="desc" class="form-label">Descripción</label>
          <div class="input-group mb-3">
            
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
            <input type="text" class="form-control" placeholder="Ingrese una Descripción" name="desc" id="name" aria-label="Ingrese una Descripción" aria-describedby="basic-addon1">
          </div>
       
          <div class="mb-3">
            <label for="formFile" class="form-label">Seleccionar Curriculum Vitae</label>
            <input class="form-control" type="file" id="formFile" name="file" accept="application/pdf"> 
          </div>
        
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>

        </form>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
      </div>
    </div>
  </div>
</div>
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
<script src="dist/js/main.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
