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
        <title>Iniciar Sesión | Fabrizio Ferroni - Web Developer</title>
        <link rel="shortcut icon" href="assets/img/faviconff.ico" type="image/x-icon">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <form  class="login__registre" id="login-in" method="POST">
                        <h1 class="login__title">Iniciar Sesión</h1>
                        <?php include("login.php") ?>
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

                        <div class="login__box">
                            <i class='bx bx-lock login__icon'></i>
                            <input
                                type="password"
                                name="contraseña"
                                placeholder="Contraseña"
                                class="login__input"
                                autocomplete="off">
                        </div>
<!-- <div class="login__record">
<input type="checkbox" name="recordar" id="" placeholder="Recordarme">
<label for="recordar"> Recordarme</label>
</div> -->
<div class="custom-control custom-checkbox login__record ">
						<input type="checkbox" id="remember" name="remember" value="0" onclick="estados()" class="custom-control-input">
						<label for="remember" class="custom-control-label">Recordarme</label>
					</div>

                        <a href="recuperarclave.php" class="login__forgot" id="resetpass">¿Has olvidado tu contraseña?</a>

                        <!-- <a type="submit" class="login__button">Iniciar Sesion</a> -->
                        <!-- <input type="submit" value="Iniciar Sesión" class="login__button"> -->
                        <button type="submit" name="login" class="login__button">
                        <!-- <i class='bx bx-log-in '></i>  -->
                        Iniciar Sesión
                            </button>

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