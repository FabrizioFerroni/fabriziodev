<?php 
include('db.php');
session_start();
error_reporting(0);
$user = trim($_POST['usuario']);
$password = trim($_POST['contraseña']);
$epassword = hash('sha512', $password);

// $consulta = "SELECT * FROM users WHERE user='$user' OR email='$user' AND pass='$epassword'";
$consulta = "SELECT * FROM users WHERE user='$user' AND pass='$epassword'";
$consulta2 = "SELECT * FROM users WHERE email='$user' AND pass='$epassword'";
$resultado = mysqli_query($conexion,$consulta);
$resultado2 = mysqli_query($conexion,$consulta2);

$filas = mysqli_num_rows($resultado);
$filas2 = mysqli_num_rows($resultado2);
if(isset($_POST['login'])){
    if(strlen($user) >=1 && strlen($epassword) >= 1){
        if($filas>0){
             $_SESSION['usuario'] = $user;
            // header('location:admin/index.php');
            ?>
                <script>
                      Swal.fire({
                        icon: 'success',
                        title: 'Gracias por iniciar sesion en mi aplicación, será redirigido a la parte administrativa.',
                        confirmButtonText: `Aceptar`,
                        confirmButtonColor: "#CB4343", 
                        }).then((result) => {
                            if (result.isConfirmed) {
                            // header('location:admin/index.php');
                            location.href="admin/index.php";
                            } 
                 });
                </script>
            <?php
            
        }else if($filas2>0){
            $_SESSION['usuario'] = $user;
            ?>
            <script>
            Swal.fire({
                                      icon: 'success',
                                      title: 'Gracias por iniciar sesion en mi aplicación, será redirigido a la parte administrativa.',
                                      confirmButtonText: `Aceptar`,
                                      confirmButtonColor: "#CB4343", 
                                      }).then((result) => {
                                        if (result.isConfirmed) {
                                            // header('location:admin/index.php');
                                            location.href="admin/index.php";
                                        } 
                                  });
      </script>
  <?php
            // header('location:admin/index.php');
        }else{
            ?>
            <div class="error__login">
                <h3 class="error" >¡Los datos ingresados estan mal escritos, por favor verifiquelos para poder ingresar!
                </h3>
            </div>
            <?php
        }

      
    }else{
        ?>
        <div class="error__login">
            <h3 class="error" >¡Por favor completa todos los campos obligatorios!
            </h3>
        </div>
        <?php
    }
}
mysqli_close($conexion);