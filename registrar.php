<?php 
include('db.php');
error_reporting(0);
$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$user = trim($_POST['user']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cpassword = trim($_POST['cpassword']);

// encriptado de password
$password_cifrada = hash('sha512', $password);

$verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE email ='$email'");
$verificar_user = mysqli_query($conexion, "SELECT * FROM users WHERE user ='$user'");

if(isset($_POST['register'])){
    if(mysqli_num_rows($verificar_user) > 0){
        ?>
        <div class="error__login">
            <h3 class="error" style="color: white; font-size: var(--small-font-size);">El nombre de usuario ya existe registrado en la base de datos
            </h3>
        </div>
        <?php
    }else{
        if(mysqli_num_rows($verificar_correo) > 0){
            ?>
            <div class="error__login">
                <h3 class="error" style="color: white; font-size: var(--small-font-size);">El correo ya existe registrado en la base de datos
                </h3>
            </div>
            <?php
        
        } else{
            if($password === $cpassword){
                if(strlen($name) >=1 && strlen($lastname) >=1 && strlen($user) >=1 && strlen($email) >=1 && strlen($password) >=1){
                    $consulta = "INSERT INTO users(name, lastname, email, user, pass) VALUES ('$name','$lastname','$email','$user','$password_cifrada')";
                    $ejecutar = mysqli_query($conexion, $consulta);

                    ?>
                    <div class="ok__login">
                        <h3 class="error" style="color: white; font-size: var(--small-font-size);">¡Gracias por registrarte en mi portal, te llegara un mail con toda la información, mientras tanto ve a loguearte a tu cuenta. <a href="iniciarsesion.php" class="ok"> Iniciar Sesion </a>
                        </h3>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="error__login">
                        <h3 class="error" >¡Por favor completa todos los campos obligatorios!
                        </h3>
                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="error__login">
                    <h3 class="error" style="color: white; font-size: var(--small-font-size);">Por favor verifique que las contraseñas coincidan
                    </h3>
                </div>
                <?php
            }
        }
    }
}
mysqli_close($conexion);
?>