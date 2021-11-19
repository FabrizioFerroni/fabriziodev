<?php
  include_once'db.php';
  session_start();
  if(isset($_GET['cerrarsesion'])){
  session_unset();
  session_destroy();
  }

  if(isset($_SESSION['rol'])){
  switch($_SESSION['rol']){
    case 1:
    header("location:admin/index.php");
    break;

    // case 2:
    // header("location:portal/index.php");
    // break;

    default:;
  }
  }

   

  if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
  $user = $_POST['usuario'];
  $pass = $_POST['contraseña'];

  $database = new Database();
  $query = $database->connect()->prepare('SELECT*FROM users WHERE usuario = :user AND contraseña = :pass');
  $query->execute(['user' => $user, 'pass' => $pass]);

  $row = $query->fetch(PDO::FETCH_NUM);
  if($row == true){
    $rol = $row[6];
    $name = $row[1];
    $lastname = $row[2];
    $_SESSION['rol'] = $rol;
    $_SESSION['name'] = $name;
    $_SESSION['lastname'] = $lastname;

    switch($_SESSION['rol']){
    case 1:
      header("location:admin/index.php");
    break;
  
    case 2:
      header("location:portal/index.php");
    break;
  
    default:;
    }
  }else{
    echo "El usuario o contraseña no son correctos";
    header("location: ingresar.php");


    // MAÑANA VER ALERTA POR ERROR DE CONTRASEÑA O USUARIO, VER DISEÑO REGISTRO PARA CELULAR, PANTALLA DE CONTRASEÑA ENVIADA AL MAIL
    ?>
    <div class="error">
       <p>El Nombre de usuario o contraseña no son correctos.</p>
    </div>
    <?php
  }
  }
?>