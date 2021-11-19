<?php
//seguridad de paginación
session_start();
error_reporting(0);
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
      case 1:
      header("location:admin/index.php");
      break;
  
    //   case 2:
    //   header("location:portal/index.php");
    //   break;
  
      default:;
    }
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
        <title>Registrarse | Fabrizio Ferroni - Web Developer</title>
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
                    <!-- Registrarse -->
                    
                    <form  method="POST" class="login__create" id="login-up">
                        <h1 class="login__title">Crear una cuenta</h1>
                        <?php include("registrar.php") ?>
                        <div class="login__box">
                            <i class='bx bx-user-circle login__icon'></i>
                            <input type="text" placeholder="Nombre" name="name" class="login__input" autocomplete="off">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-user-circle login__icon'></i>
                            <input
                                type="text"
                                placeholder="Apellido"
                                name="lastname"
                                class="login__input"
                                autocomplete="off">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input
                                type="text"
                                placeholder="Usuario"
                                name="user"
                                class="login__input"
                                autocomplete="off">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input
                                type="email"
                                placeholder="Correo Electrónico"
                                name="email"
                                class="login__input"
                                autocomplete="off">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock login__icon'></i>
                            <input
                                type="password"
                                name="password"
                                placeholder="Contraseña"
                                class="login__input"
                                autocomplete="off">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock login__icon'></i>
                            <input
                                type="password"
                                name="cpassword"
                                placeholder="Repetir Contraseña"
                                class="login__input"
                                autocomplete="off">
                        </div>

                        <!-- <a href="#" class="login__button">Registrarse</a> -->
                        <!-- <input type="submit" value="Registrarse" class="login__button"> -->
                        <button type="submit" name="register" class="login__button">
                                Registrarse
                            </button>

                        <div class="">
                            <span class="login__account">¿Ya tienes una cuenta?</span>
                            <!-- <span class="login__signup" id="sign-in">Iniciar Sesión</span> -->
                            <a href="iniciarsesion.php" class="login__signup">Iniciar Sesión</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="assets/js/login.js"></script>
    </body>
</html>