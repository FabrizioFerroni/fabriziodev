<?php
include('db.php');
session_start();
error_reporting(0);
$user = trim($_POST['usuario']);
$password = trim($_POST['contraseña']);
$epassword = hash('sha512', $password);

$name = "SELECT name FROM users WHERE usuario = '$user'";
$lastname = "SELECT lastname FROM users WHERE usuario = '$user'";


$consulta = "SELECT * FROM users WHERE usuario = '$user' OR email = '$user' AND contraseña = '$epassword'";
$validar_login = mysqli_query($conexion, $consulta);
if(isset($_POST['login'])){
    if(strlen($user) >=1 &&  strlen($password) >=1){
        if(mysqli_num_rows($validar_login) > 0){

            // $row = $query->fetch(PDO::FETCH_NUM);
            // $name = $row[1];
            // $lastname = $row[2];
            $_SESSION['name'] = $name;
            $_SESSION['lastname'] = $lastname;


            $_SESSION['usuario'] = $user;
            // $_SESSION['name'] = $name;
            // $_SESSION['lastname'] = $lastname;
            header('location:admin/index.php');

            // echo $epassword;
        }
        else{
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
?>