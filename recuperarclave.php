<?php
//seguridad de paginación
session_start();
error_reporting(0);
// if(isset($_SESSION['rol'])){
//     switch($_SESSION['rol']){
//       case 1:
//       header("location:admin/index.php");
//       break;
  
//     //   case 2:
//     //   header("location:portal/index.php");
//     //   break;
  
//       default:;
//     }
//     }

if(isset($_SESSION['usuario'])){
    header('location:admin/index.php');
  }


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!--==================== UNICONS ====================-->
        <link
            href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'
            rel='stylesheet'>
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>Recuperar Contraseña | Fabrizio Ferroni - Web Developer</title>
        <link rel="shortcut icon" href="assets/img/faviconff.ico" type="image/x-icon">
    </head>
    <body>
        <div class="fondo">
            <img src="assets/img/fondo.jpg" alt="">
        </div>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/img-login.svg" alt="">
                </div>
                <div class="login__forms">

                    <!-- Iniciar Sesion -->
                    <!-- <form action="login.php" class="login__registre" id="login-in" method="POST"> -->
                    <form  class="login__lostpass" id="login-in" method="POST">
                        <h1 class="login__title">Recuperar Contraseña</h1>
                        <?php include("recovery.php") ?>
                        <div class="container">
                          <!-- Aca tendria que ir el mensaje de error y por tiempo -->
                          
                        </div>
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input
                                type="text"
                                name="usuario"
                                placeholder="Usuario"
                                class="login__input"
                                autocomplete="off">
                        </div>


                        
                        <button type="submit" name="login" class="login__button">
                        Recuperar Contraseña
                            </button>

                            <p class="login__login">¿Recordaste la contraseña? <a href="iniciarsesion.php" class="login__login2" id="resetpass">Inicia sesión aquí</a></p>

                        <!-- <div class="">
                            <span class="login__account">¿No tienes una cuenta?</span>
                            <!-- <span class="login__signin" id="sign-up">Registrarse</span> --
                            <a href="registrarse.php" class="login__signin" id="sign-up">Registrarse</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>

        <script src="assets/js/login.js"></script>
    </body>
</html>