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
$datos3 = "SELECT * FROM contacto";
$datos = "SELECT * FROM contacto ORDER by ID desc";
$user = $_SESSION['usuario'];
// $datos2 = "SELECT * FROM users where user ='$user'";
$datos2 = "SELECT * FROM users where user ='$user' OR email = '$user'";
$sql = "SELECT * FROM contacto ORDER by ID desc LIMIT 1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto | Fabrizio Ferroni - Web Developer</title>
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
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <!-- <link rel="stylesheet" href="dist/css/bootstrap.min.css"> -->

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
            <a href="configuraciones.php" class="nav-link ">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuraciones
                <!-- <span class="right badge badge-danger">New</span> -->
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
            <h1 class="m-0">Contacto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Contacto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
              <?php
                    $buscar = strtolower($_REQUEST["buscar"]);

                    if(empty($buscar)){
                      header("location: contacto.php");
                    }



                    $SQL_READ = "SELECT * FROM contacto WHERE name LIKE '%".$buscar."%' OR  lastname LIKE '%".$buscar."%'  OR email LIKE '%".$buscar."%'  OR whatsapp LIKE '%".$buscar."%'  OR  subject LIKE '%".$buscar."%'  OR message LIKE '%".$buscar."%' ";

                    
              ?>



      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="card card-danger card-outline">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-inbox"></i> Bandeja de entrada</h3>
              
              <div class="card-tools">
                <form action="contacto-buscar.php" method="GET">
                <div class="input-group input-group-sm">                         
                  <input type="text" class="form-control" placeholder="Buscar Mail" name="buscar" autocomplete="off" value="<?php echo $buscar; ?>">
                  <div class="input-group-append">
                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-search"  data-bs-toggle="tooltip" data-bs-placement="top" title="Buscar"></i>
                    </button>                  
                  </div>                  
                </div>
                </form>
              </div>


              
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>

                <button type="button" onclick="nuevo();" class="btn btn-success btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Crear Nuevo Email">
                    <i class="fas fa-plus"></i>
                  </button>
                <div class="btn-group">
              
                  <?php $resultado = mysqli_query($conexion, $datos);
                    $row = mysqli_fetch_assoc($resultado);
                    if($row["id"] == 0){
                    ?>
                    <button disabled type="button" onclick="borrar();" class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <?php }else{ ?>
                  <button type="button" onclick="borrar();" class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar">
                    <i class="far fa-trash-alt"></i>
                  </button>
                  <?php } ?>
                  <!-- <button type="button" onclick="borrar();" class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar">
                    <i class="far fa-trash-alt"></i>
                  </button> -->
                  <button type="button" onclick="responder();" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Responder">
                  <!-- <a href="contacto-responder.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Responder"> -->
                    <i class="fas fa-reply"></i>
                  </button>
                  <button type="button" onclick="reenviar();" class="btn btn-info btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Reenviar">
                    <i class="fas fa-reply-all"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" onclick="reload();" class="btn btn-dark btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Recargar Pagina">
                  <i class="fas fa-sync-alt"></i>
                </button>
                <?php $resultado = mysqli_query($conexion, $datos3);
                    $row4 = mysqli_fetch_assoc($resultado);
                    ?>
                <button type="button" onclick="noleido();" class="btn btn-warning text-white btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Marcar como No Leido">
                  <i class="fas fa-envelope"></i>
                </button>
                
                <button type="button" onclick="leido();" class="btn btn-secondary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Marcar como Leido">
                  <i class="fas fa-envelope-open"></i>
                </button>
                  <?php ?>
                <div class="float-right">
                <?php $resultado3 = mysqli_query($conexion, $sql);
                    $row3 = mysqli_fetch_assoc($resultado3);
                    ?>
                    <?php if($row3["id"] == 0) { ?>
                    <!-- No hay registros -->
                    0-0/0
                    <?php } else{?>
                 1 - <?php echo $row3["id"];?>/<?php echo $row3["id"];?>
                  <?php } ?>  
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Página Anterior">
                      <i class="fas fa-chevron-left"></i>
                    </button>

                    
                    <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Siguiente Página">
                      <i class="fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
                   
                  <tr>
                  
                  <?php if($row["leido"] == 0){ ?>
                    <td style="border-left: 5px solid #DC3545; border-radius: 5px;">
                    <?php }else{ ?>
                    <td>
                    <?php } ?>
                    
                      <div class="icheck-danger">
                        <input type="checkbox" class="check" name="id" id="<?php echo $row["id"];?>" value="<?php echo $row["id"]; ?>">
                        <!-- <input type="checkbox" name="ckeck" id="<?php echo $row["id"];?>" value="<?php echo $row["id"]; ?>"> -->
                        <label for="<?php echo $row["id"];?>"></label>
                      </div>
                    </td>
                    <!-- <?php if($row["leido"] == 0){ ?>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-envelope-open text-success"  data-bs-toggle="tooltip" data-bs-placement="top" title="Marcar como No Leido"></i></a></td>
                    <?php }else{ ?>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-envelope text-danger"  data-bs-toggle="tooltip" data-bs-placement="top" title="Marcar como  Leido"></i></a></td>
                    <?php } ?> -->
                    <td class="mailbox-name"><a href="contacto-leer.php?id=<?php echo $row["id"] ?>" class="text-dark"><?php echo $row["name"] ?> <?php echo $row["lastname"] ?></a></td>
                    <td class="mailbox-subject"><b><?php echo $row["subject"]; ?></b> - <?php echo substr($row["message"],0, 150); ?>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php echo $row["dia"];?> <?php echo $row["fechadecont"];?> <?php echo $row["horadecontacto"];?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
           
          </div>
        
        
        <!-- Mañana ver como enviar las respuestas a los mails de los interesados, boton crear al lado de buscar, ver como hacer para buscar, ver la paginación casera de los mails, parte configuración del site en bd o file. URL AMIGABLES -->
        
        
        <!-- <div class="card">
          <div class="card-header">
              <div class="card-title"><i class="fas fa-envelope"></i> Contacto</div>
              <!-- <php $resultado2 = mysqli_query($conexion, $datos2);
                  while($row2 = mysqli_fetch_assoc($resultado2)){
                    if($row2["name"] == "Emiliano" || $row2["name"] == "Sofia"){
              ?>
              <div class="dropdown">
                <button class="btn btn-success dropdown-toggle mibtn3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="display:none;">
                <i class="fas fa-cloud-download-alt"></i> 
                Exportar
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-copy"></i> Copiar</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv"></i> Csv</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Excel</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> PDF</a></li>
                </ul>
              </div>
              <php } else{ ?>
                <div class="dropdown">
                <button class="btn btn-success dropdown-toggle mibtn3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-cloud-download-alt"></i> 
                Exportar
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-copy"></i> Copiar</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv"></i> Csv</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Excel</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i> PDF</a></li>
                </ul>
              </div>
              <php }?>
              <php } mysqli_free_result($resultado2);?> --

          </div>
          <div class="card-body">
           
          </div>
        </div> -->
     
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <?php $resultado = mysqli_query($conexion, $datos);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo $row["subject"];?></h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- diseñar cuerpo mail o ver plantilla -->
     
                      <p><?php echo $row["name"];?> <?php echo $row["lastname"];?> &lt;<?php echo $row["email"];?>&gt; </p>
                      <p class=""><?php echo $row["dia"];?> <?php echo $row["fechadecont"];?> <?php echo $row["horadecontacto"];?></p>
                      <hr>
                      <p><?php echo $row["message"];?></p>

                    <?php } ?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
<script src="dist/js/contacto.js"></script>
<!-- <script src="dist/js/leido-no.js"></script> -->
<script type="text/javascript" src="dist/DataTables/datatables.min.js"></script>
<!-- <script type="text/javascript" src="dist/DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script> -->
<!-- <script type="text/javascript" src="dist/DataTables/dataTables-1.10.25/js/dataTables.bootstrap5.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/main.js"></script>
<script src="dist/js/demo.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    // $('.mailbox-star').click(function (e) {
    //   e.preventDefault()
    //   //detect type
    //   var $this = $(this).find('a > i')
    //   var fa    = $this.hasClass('fa')

    //   //Switch states
    //   if (fa) {
    //     $this.toggleClass('fa-star')
    //     $this.toggleClass('fa-star-o')
    //   }
    // })
  });

  function reload(){
    location.reload();
  }

  function nuevo(){
    window.location="contacto-nuevo.php";
  }


    function responder() {
      var url = 'http://fabriziodev.test/admin/contacto-responder.php';
      
      var checkboxs = document.querySelectorAll('.check:checked');
      
      checkboxs.forEach((check, index) => {
        if (index == 0) {
          url += ('?' + check.name + '=' + check.value);
          // checkboxs;
          $(".check").removeAttr("checked");
        }
        // } else {
        //   url += ('&' + check.name + '=' + check.value);    
        // }
      });
      
      // console.log(url);
      window.location=url;
    }
    function reenviar() {
      var url = 'http://fabriziodev.test/admin/contacto-reenviar.php';
      
      var checkboxs = document.querySelectorAll('.check:checked');
      
      checkboxs.forEach((check, index) => {
        if (index == 0) {
          url += ('?' + check.name + '=' + check.value);
        } else {
          url += ('&' + check.name + '=' + check.value);    
        }
      });
      
      // console.log(url);
      window.location=url;
    }

    function borrar(id) {
      var id ='';
      var checkboxs = document.querySelectorAll('.check:checked');
      
      checkboxs.forEach((check, index) => {
        if (index == 0) {
          // url += ('?' + check.name + '=' + check.value);
          id += (check.value);
        } 
      });
      console.log(id);
      AlertarEliminacion(id);
    }


    function leido(id){
      var url = 'http://fabriziodev.test/admin/contacto-leido.php';
      var id ='';
      var checkboxs = document.querySelectorAll('.check:checked');
      
      checkboxs.forEach((check, index) => {
        if (index == 0) {
          // url += ('?' + check.name + '=' + check.value);
          id += (check.value);
        } 
      });
      console.log(id);
      AlertarLeida(id);

    }

    function noleido(id){
      var id ='';
      var checkboxs = document.querySelectorAll('.check:checked');
      
      checkboxs.forEach((check, index) => {
        if (index == 0) {
          // url += ('?' + check.name + '=' + check.value);
          id += (check.value);
        } 
      });
      console.log(id);
      AlertarNoLeido(id);

    }

</script>
</body>
</html>
