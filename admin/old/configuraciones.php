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
$datos = "SELECT * FROM configuraciones";
$user = $_SESSION['usuario'];
// $datos2 = "SELECT * FROM users where user ='$user'";
$datos2 = "SELECT * FROM users where user ='$user' OR email = '$user'";
$nombrecv = "SELECT nombre FROM cv";


include('conexion.php');

$tmp = array();
$res = array();

$sel = $con->query("SELECT * FROM configuraciones");
while ($row = $sel->fetch_assoc()) {
    $tmp = $row;
    array_push($res, $tmp);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Configuraciones | Fabrizio Ferroni - Web Developer</title>
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
  <!--==================== SWEET ALERT JS ====================-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
          <a class="d-block"><?php echo $row2["name"];?> <?php echo $row2["lastname"];; ?></a>  
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
            <a href="configuraciones.php" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuraciones
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacto.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Contacto
                <!-- <span class="right badge badge-danger">New</span> -->
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
            <h1 class="m-0">Configuraciones</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Configuraciones</li>
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
        <div class="card card-danger card-outline">
          <div class="card-header">
              <div class="card-title"><i class="fas fa-cogs"></i> Configuraciones</div>
              <?php $resultado2 = mysqli_query($conexion, $datos2);
                  while($row2 = mysqli_fetch_assoc($resultado2)){
                    if($row2["usuario"] != "fferroni" ){
              ?>
              <a href="editar-config.php mibtn2" class="btn btn-success" style="display: none;"><i class="fas fa-pen"></i>  Editar Configuraciónes</a>
              <!-- <button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display: none;"><i class="fas fa-pen"></i>  Editar Configuraciónes</button> -->
              <?php } else{ ?>
              
              <?php $resultado = mysqli_query($conexion, $datos);
            while($row = mysqli_fetch_assoc($resultado)){
            ?>
<!-- <button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-pen"></i>  Editar Configuraciónes</button> -->
<button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#editconfig<?php echo $row["id"];?>"><i class="fas fa-pen"></i>  Editar Configuraciónes</button>

              <!-- <a href="editar-config.php?id=<?php echo $row["id"];?>" class="btn btn-success mibtn2"><i class="fas fa-pen"></i>  Editar Configuraciónes</a> -->
              <?php } ?>
              <?php }?>
              <?php } mysqli_free_result($resultado2);?>
          </div>
          <div class="card-body">
          <?php $resultado = mysqli_query($conexion, $datos);
            while($row = mysqli_fetch_assoc($resultado)){
            ?>
                <div class="row">
                    <div class="col-md-4">
                      <label for="name"> Nombre</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row["nombre"]; ?>" readonly>
                    </div>

                    <div class="col-md-4">
                      <label for="host"> Host</label>
                      <input type="text" name="host" class="form-control" value="<?php echo $row["host"]; ?>" readonly>
                    </div>

                    <div class="col-md-4">
                      <label for="port"> Puerto</label>
                      <input type="text" name="port" class="form-control" value="<?php echo $row["port"]; ?>" readonly>
                    </div>
                </div>

                <div class="row mtop16">
                    <div class="col-md-4">
                      <label for="smtpsecure">Cifrado Smtp</label>
                      <input type="text" name="smtpsecure" class="form-control" value="<?php echo $row["smtpsecure"]; ?>" readonly>
                    </div>

                    <div class="col-md-4">
                      <label for="username">Usuario</label>
                      <input type="text" name="username" class="form-control" value="<?php echo $row["username"]; ?>" readonly>
                    </div>

                    <div class="col-md-4">
                      <label for="password">Contraseña</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $row["password"]; ?>" readonly maxlength="2">
                    </div>
                </div>
        <?php } ?>
          </div>
        </div>

     
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Modal -->
<?php $resultado = mysqli_query($conexion, $datos);
  while($row = mysqli_fetch_assoc($resultado)){
?>
<div class="modal fade " id="editconfig<?php echo $row["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<?php } ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-tools"></i> Editar Configuración</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" id="form1">
        <?php $resultado = mysqli_query($conexion, $datos);
            while($row = mysqli_fetch_assoc($resultado)){
            ?>
                <div class="row">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <div class="col-md-12">
                      <label for="name"> Nombre</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row["nombre"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="host"> Host</label>
                      <input type="text" name="host" class="form-control" value="<?php echo $row["host"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="port"> Puerto</label>
                      <input type="text" name="port" class="form-control" value="<?php echo $row["port"]; ?>" onkeypress='return validaNumericos(event)' autocomplete="off" maxlength="3">
                    </div>                    
                  </div>

                  <div class="row mtop16">
                      <div class="col-md-12">
                        <label for="smtpsecure">Cifrado Smtp</label>
                        <input type="text" name="smtpsecure" class="form-control" value="<?php echo $row["smtpsecure"]; ?>" autocomplete="off" maxlength="3">
                      </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="username">Usuario</label>
                      <input type="email" name="username" class="form-control" value="<?php echo $row["username"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="password">Contraseña</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $row["password"]; ?>" autocomplete="off">
                    </div>
                  </div>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="onSubmitForm(<?php echo $row["id"] ?>);"><i class="fas fa-save"></i> Guardar</button>
        <?php } ?>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>
                  
                            function onSubmitForm() {
                              var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                          <?php $resultado = mysqli_query($conexion, $datos);
                                            while($row = mysqli_fetch_assoc($resultado)){
                                          ?>
                                          $('#editconfig<?php echo $row["id"];?>').modal('hide') ;
                                          <?php } ?>
                                          // console.log(id);                                         
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Se ha editado las configuraciones con éxito.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#form1').trigger('reset');
                                                  location.reload();
                                                } 
                                              })
                                            
                                            
                                        }else {
                                          <?php $resultado = mysqli_query($conexion, $datos);
                                            while($row = mysqli_fetch_assoc($resultado)){
                                          ?>
                                          $('#editconfig<?php echo $row["id"];?>').modal('hide');
                                          <?php } ?>
                                          // console.log(id);
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Hubo un problema para editar las configuraciones.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    $('#form1').trigger('reset');
                                                    location.reload();
                                                  } 
                                            });
                                        }
                                       



                                       

                                    }
                                };
                                
                                xhttp.open("POST", "config.php", true);
                                xhttp.send(data);
                               
                                // location.reload();  
                            }

                            function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
}
        </script>

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
<script src="dist/js/cv.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
