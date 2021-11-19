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
$user = $_SESSION['usuario'];
$datos= "SELECT * FROM users";
// $datos2 = "SELECT * FROM users where user ='$user'";
$datos2 = "SELECT * FROM users where user ='$user' OR email = '$user'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuarios | Fabrizio Ferroni - Web Developer</title>
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
  <!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css"> -->
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
            <a href="index.php" class="nav-link">
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
            <a href="usuarios.php" class="nav-link active">
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
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
              <div class="card-title"><i class="fas fa-users"></i> Usuarios</div>

              <?php $resultado2 = mysqli_query($conexion, $datos2);
                  while($row2 = mysqli_fetch_assoc($resultado2)){
                    if($row2["name"] == "Emiliano" || $row2["name"] == "Sofia"){
              ?>
              <button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#adduser" style="display: none;"><i class="fas fa-plus"></i>  Agregar nuevo</button>
              <?php } else{ ?>
              <button class="btn btn-success mibtn2"type="button" data-bs-toggle="modal" data-bs-target="#adduser"><i class="fas fa-plus"></i>  Agregar nuevo</button>
              <?php }?>
              <?php } mysqli_free_result($resultado2);?>
          </div>
          <div class="card-body">
              <table id="example" class="display table  table-striped table-hover text-nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="100px">Imagen</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo Electronico</th>
                        <th>Usuario</th>
                        <th width="50">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td>
                        <?php 
                        if($row["rutaimg"] == null){
                          ?>
                          <img src="dist\img\avatar.png" class="img-rounded elevation-2" alt="" width="100px" height="100px">
                        <?php }else{ ?>  
                         <img src="<?php echo $row["rutaimg"]; ?>" class="img-rounded elevation-2" alt="" width="100px" height="100px">
                         <?php } ?>
                         </td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["user"]; ?></td>
                        <td>
                        <button class="btn btn-info"type="button" data-bs-toggle="modal" data-bs-target="#edituser<?php echo $row["id"];?>"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-warning"type="button" style="color: #fff;" data-bs-toggle="modal" data-bs-target="#editpass<?php echo $row["id"];?>"><i class="fas fa-key"></i></button>
                        
                        <!-- <a class="btn btn-danger delete" data-bs-toggle="tooltip" data-placement="top" title="Borrar" id="delete"><i class="fas fa-trash"></i></a> -->
                        <button class="btn btn-danger" onclick="AlertarEliminacion(<?php echo $row["id"] ?>);"><i class="fas fa-trash"></i></button>

                        </td> 
                        
                        <div class="modal fade " id="edituser<?php echo $row["id"];?>" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-pen"></i> Editar Usuario: <?php echo $row["user"]; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data" id="form1">

                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="edit_avatar">
                                          
                                                <a href="#" id="btn_avatar_edit">
                                                <?php if($row["rutaimg"] == null){
                                                  ?> 
                                                  <div class="overlay" id="avatar_changee_overlay"><i class="prueba fas fa-plus"></i></div>
                                                  <?php }else{ ?>
                                                    <div class="overlay" id="avatar_changee_overlay"><i class="prueba fas fa-pen"></i></div>
                                                  <?php } ?>  
                                                  <?php if($row["rutaimg"] == null){
                                                  ?> 
                                                  <img src="dist\img\avatar.png"  alt="" >     
                                                  <?php }else{ ?>
                                                      <img src="<?php echo $row["rutaimg"]; ?>" alt=""  >  
                                                  <?php } ?>  
                                              </a>
                                              <input class="form-control" type="file" name="file" accept="image/*" id="input_file_avatar" autocomplete="off">
                                          </div>


                                        <!-- <?php if($row["rutaimg"] == null){
                                                  ?>
                                          <img src="dist\img\avatar.png" class="img-circle elevation-2" alt="" width="100px" height="100px">
                                                <?php }else{ ?>  
                                          <img src="<?php echo $row["rutaimg"]; ?>" alt="" class="img-circle elevation-2" width="150px">
                                          <?php } ?> -->
                                        </div>             
                                      </div>
                                      <!-- <div class="row mtop16">
                                      <div class="col-md-12">
                                          <label for="formFile" class="form-label">Cambiar imagen</label>
                                          <input class="form-control" type="file" id="formFile" accept="image/*">
                                      </div>
                                      </div> -->
                              
                                        <div class="row mtop16">
                                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                            <div class="col-md-12">
                                              <label for="name"> Nombre</label>
                                              <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>" autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="host"> Apellido</label>
                                              <input type="text" name="lastname" class="form-control" value="<?php echo $row["lastname"]; ?>" autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="port"> Email</label>
                                              <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>"  autocomplete="off" readonly>
                                            </div>                    
                                          </div>

                                          <div class="row mtop16">
                                              <div class="col-md-12">
                                                <label for="smtpsecure">Usuario</label>
                                                <input type="text" name="user" class="form-control" value="<?php echo $row["user"]; ?>" autocomplete="off" readonly>
                                              </div>
                                          </div>
                                          <div class="row mtop16">
                                         
                                          
                              
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="onSubmitForm(<?php echo $row["id"]; ?>);"><i class="fas fa-user-cog"></i> Editar Usuario</button>
                                
                                </form>
                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                              </div>
                            </div>
                          </div>
                        </div>



                       
                       
                    </tr>


                    <div class="modal fade editpass" id="editpass<?php echo $row["id"];?>" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="prueba" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-pen"></i> Editar Contraseña de: <?php echo $row["usuario"]; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data" id="form3">
                              
                                           
                                          <div class="row">
                                            <div class="col-md-12">
                                              <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                                              <input type="hidden" name="passactual" value="<?php echo $row["contraseña"];?>">
                                              <label for="ca">Contraseña Actual</label>
                                              <input type="password" name="ca" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="nc">Nueva Contraseña</label>
                                              <input type="password" name="nc" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="rnc">Repetir Contraseña</label>
                                              <input type="password" name="rnc" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          
                              
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="onSubmitForm3(<?php echo $row["id"]; ?>);"><i class="fas fa-key"></i> Cambiar Contraseña</button>
                                
                                </form>
                                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php } mysqli_free_result($resultado);?>
                  </tbody>
                  
                  </table>
          </div>
        </div>
        <!-- /.row -->

     
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade " id="adduser" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-pen"></i> Agregar nuevo usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data" id="form2">

                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="edit_avatar">
                                          
                                                <a href="#" id="btn_avatar_edit2">
                                                  <div class="overlay" id="avatar_changee_overlay2"><i class="prueba fas fa-plus"></i></div>
                                                 
                                                  <img src="dist\img\avatar.png"  alt="" >     
                                                 
                                              </a>
                                              <input class="form-control" type="file" name="file" accept="image/*" id="input_file_avatar2" autocomplete="off">
                                          </div>
                                        </div>             
                                      </div>
                              
                                        <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="name"> Nombre</label>
                                              <input type="text" name="name" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="lastname"> Apellido</label>
                                              <input type="text" name="lastname" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="poemailrt"> Email</label>
                                              <input type="email" name="email" class="form-control" autocomplete="off" >
                                            </div>                    
                                          </div>

                                          <div class="row mtop16">
                                              <div class="col-md-12">
                                                <label for="user">Usuario</label>
                                                <input type="text" name="user" class="form-control" autocomplete="off" >
                                              </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="password">Contraseña</label>
                                              <input type="password" name="password" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          <div class="row mtop16">
                                            <div class="col-md-12">
                                              <label for="rpassword">Repetir Contraseña</label>
                                              <input type="password" name="rpassword" class="form-control"  autocomplete="off">
                                            </div>
                                          </div>
                                          
                              
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="onSubmitForm2();"><i class="fas fa-save"></i> Agregar Usuario</button>
                                
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
<script>
     function onSubmitForm(id) {
      parametros = {"id":id}
      console.log(id);
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                          $('#edituser').modal('hide')                                           
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Usuario editado con éxito.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#form1').trigger('reset');
                                                  location.reload();
                                                } 
                                              })
                                            
                                            
                                        } else if (msg == 'warning') { 
                                          $('#edituser').modal('hide')     
                                          Swal.fire({
                                                icon: 'warning',
                                                title: 'Los campos no pueden estar vacíos',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#edituser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }else {
                                          $('#edituser').modal('hide')
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Hubo unos problemas para editar su usuario.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                                
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    $('#form1').trigger('reset');
                                                    // location.reload();
                                                  } 
                                            });
                                        }
                                       console.log(msg);



                                       

                                    }
                                };
                                
                                xhttp.open("POST", "edituser.php", true);
                                xhttp.send(data);
                                // console.log(id);
                                // console.log(data);
                               
                                // location.reload();  
                            }



                            function onSubmitForm2() {
                                var frm = document.getElementById('form2');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                          $('#adduser').modal('hide')                                           
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Usuario agregado con éxito a la base de datos',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#form2').trigger('reset');
                                                  location.reload();
                                                } 
                                              })
                                            
                                            
                                        } else if (msg == 'warning') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'warning',
                                                title: 'Los campos no pueden estar vacíos',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }else if (msg == 'fail2') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Las contraseñas no coinciden',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          } else if (msg == 'success2') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'success',
                                                title: 'Las contraseñas coinciden',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          } else if (msg == 'info') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'warning',
                                                title: 'Las contraseñas no son iguales.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          } else if (msg == 'incorrect') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Este nombre de usuario ya existe registrado en la base de datos.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }  else if (msg == 'incorrect2') { 
                                          $('#adduser').modal('hide')     
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Este correo ya existe registrado en la base de datos.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#adduser').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }else {
                                          $('#adduser').modal('hide')
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Hubo un problema para agregar el usuario a la base de datos',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    $('#form2').trigger('reset');
                                                    // location.reload();
                                                  } 
                                            });
                                        }
                                       
                                        console.log(msg)


                                       

                                    }
                                };
                                
                                xhttp.open("POST", "adduser.php", true);
                                xhttp.send(data);
                               
                                // location.reload();  
                            }

                            function onSubmitForm3() {
                                var frm = document.getElementById('form3');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                          $('#editpass').modal('hide')                                           
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Se cambio tu contraseña con éxito.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  // $('#form3').trigger('reset');
                                                  location.reload();
                                                } 
                                              })
                                            
                                            
                                        } else if (msg == 'warning') { 
                                          $('#editpass').modal('hide')     
                                          Swal.fire({
                                                icon: 'warning',
                                                title: 'Los campos no pueden estar vacíos',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#editpass').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }else if (msg == 'incorrect') { 
                                          $('#editpass').modal('hide')     
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Tu contraseña actual no coincide con la guardada en la base de datos.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                              }).then((result) => {
                                                if (result.isConfirmed) {
                                                  $('#editpass').modal('show')
                                                } 
                                            });
                                          
                                            
                                          }else {
                                          $('#editpass').modal('hide')
                                          Swal.fire({
                                                icon: 'error',
                                                title: 'Hubo un problema para cambiar la contraseña.',
                                                confirmButtonText: `Aceptar`,
                                                confirmButtonColor: "#CB4343", 
                                                }).then((result) => {
                                                  if (result.isConfirmed) {
                                                    $('#form3').trigger('reset');
                                                    // location.reload();
                                                  } 
                                            });
                                        }
                                       
                                        console.log(msg)


                                       

                                    }
                                };
                                
                                xhttp.open("POST", "editpass.php", true);
                                xhttp.send(data);
                               
                                // location.reload();  
                            }
</script>
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
<!-- <script src="dist/js/cv.js"></script> -->
<script src="dist/js/user.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
</body>
</html>
