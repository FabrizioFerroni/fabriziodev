<?php 
include("db.php");
// $dbServer= "localhost";
// $dbName = "fabrizioferroni";
// $dbUser = "root";
// $dbPassword = "";
// $pdo = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUser, $dbPassword);



// $ultidagg = mysqli_insert_id($conexion);
// $id = $pdo->lastInsertId();
// $pdo->commit();
// $descarga = "SELECT * FROM cv WHERE id='$id'";

// $descarga = "SELECT * FROM cv ORDER by ID desc LIMIT 1";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/web.css">
    <title>Fabrizio Ferroni - Web Developer</title>
    <link rel="shortcut icon" href="assets/img/faviconff.ico" type="image/x-icon">
    <!--==================== SWEET ALERT JS ====================-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--==================== AJAX JS ====================-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/mostrar.js"></script>

   

    
    <!--==================== JQUERY NUMERIC JS ====================-->
    <script type="text/javascript" src="assets/js/jquery.numeric.js"></script>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Fabrizio Developer</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#inicio" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Inicio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#sobre-mi" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> Sobre mí
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#habilidades" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Habilidades
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#servicios" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Servicios
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portafolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portafolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contacto" class="nav__link">
                            <i class="uil uil-message nav__icon"></i> Contáctame
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close " id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps "></i>
                </div>
            </div>
        </nav>
    </header>
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="inicio">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://dribbble.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x="12" y="16" xlink:href="assets/img/perfil1.png" />
                                <!-- x 12 y 18 -->
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Hola, soy Fabrizio</h1>
                        <h3 class="home__subtitle">Desarrollador backend y frontend</h3>
                        <p class="home__description">Experiencia de alto nivel en diseño web y conocimientos en desarrollo, produciendo trabajos de calidad.</p>
                        <a href="#contacto" class="button button--flex">
                            Contactame <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#sobre-mi" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">
                            Desplazarse hacia abajo
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!--==================== ABOUT ====================-->
        <section class="about section" id="sobre-mi">
            <h2 class="section__title">Sobre Mí</h2>
            <span class="section__subtitle">
                Mi introducción
            </span>
            <div class="about__container container grid">
                <img src="assets/img/about.jpg" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description">
                        Desarrollador web, con amplios conocimientos y años de experiencia, trabajando en tecnologías web y diseño Ui / Ux, entregando trabajos de calidad.
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">
                                08+
                            </span>
                            <span class="about__info-name">
                                Años <br> de experiencia
                            </span>
                        </div>
                        <div>
                            <span class="about__info-title">
                                20+
                            </span>
                            <span class="about__info-name">
                                Proyectos <br> terminados
                            </span>
                        </div>
                        <div>
                            <span class="about__info-title">
                                05+
                            </span>
                            <span class="about__info-name">
                                Empresas <br> trabajaron
                            </span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a class="button button--flex register__button">
                            Descargar CV <i class="uil uil-download-alt button__icon"></i>
                        </a>
                        <!-- <div class="services__content"> -->
                        <!-- <div> -->
                        <!-- <i class="uil uil-web-grid services__icon"></i> -->
                        <!-- <h3 class="services__title">Diseñador <br> Ui / Ux</h3> -->
                        <!-- </div> -->
                        <div class="login__modal">
                            <div class="login__modal-content">
                                <h4 class="login__modal-title">Iniciar Sesion</h4>
                                <i class="uil uil-times login__modal-close"></i>
                                <div class="mensaje">
                                    
                                </div>
                                <form action="login.php" method="POST" class="login__modal-login grid">
                                    <div class=" grid">
                                        <div class="contact__content">
                                            <label for="usuario" class="contact__label">
                                                <i class="uil uil-user-md contact__label"></i>
                                                Usuario
                                                <input type="text" name="usuario" class="contact__input" autocomplete="off" placeholder="Ingrese su Usuario aquí">
                                            </label>
                                        </div>
                                        <div class="contact__content">
                                            <label for="contraseña" class="contact__label">
                                                <i class="uil uil-key-skeleton-alt contact__label"></i>
                                                Contraseña
                                                <input type="password" name="contraseña" class="contact__input" autocomplete="off" placeholder="Ingrese su Contraseña aquí">
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="button button-flex login__button2">
                                            Iniciar Sesion
                                            <i class="uil uil-sign-in-alt button__icon"></i>
                                        </button>

                                        <a  class="register__button login__modal-cerrar enlace__login">
                                            Registrarse
                                            <i class="uil uil-user-plus enlace__login-icon"></i>
                                        </a>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>

                        <!-- Descargar -->
                            <div class="register__modal">
                            <div class="register__modal-content">
                                <h4 class="register__modal-title">Descargar CV</h4>
                                <i class="uil uil-times register__modal-close"></i>
                                <p class="register__modal-descripcion">Completá aquí para poder descargar mi Curriculum Vitae</p>                             
                               <?php include('descargar.php'); ?>
                                <form method="POST" class="register__modal-register grid" id="download">
                                    <div class=" grid">
                                    <!-- <div class="contact__inputs grid"> -->
                                        <div class="contact__content">
                                            <label for="name" class="contact__label">
                                                <i class="uil uil-user contact__label"></i>
                                                Nombre
                                                <input type="text" name="name" class="contact__input" autocomplete="off" placeholder="Ingrese su Nombre aquí" >
                                            </label>
                                        </div>
                                        <div class="contact__content">
                                            <label for="lastname" class="contact__label">
                                                <i class="uil uil-user contact__label"></i>
                                                Apellido
                                                <input type="text" name="lastname" class="contact__input" autocomplete="off" placeholder="Ingrese su Apellido aquí" >
                                            </label>
                                        </div>
<!-- </div> -->
                                        <div class="contact__content">
                                            <label for="contact" class="contact__label">
                                                <i class="uil uil-comment-alt-medical contact__label"></i>
                                                ¿Quieres que me contacte contigo?
                                                <select name="contact" placeholder="Seleccione una opción" class="contact__input" autocomplete="off" onChange="mostrar(this.value);">
                                                    <option hidden selected>Selecciona una opción</option>
                                                    <option value="Si por correo electronico">Si por correo electrónico</option>
                                                    <option value="Si por whatsapp">Si por whatsapp</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="contact__content" id="email" style="display:none;">
                                            <label for="email" class="contact__label">
                                                <i class="uil uil-at contact__label"></i>
                                                Correo Electrónico
                                                <input type="email" name="email" id="email" class="contact__input" autocomplete="off" placeholder="Ingrese su Correo Electrónico aquí" >
                                            </label>
                                        </div>
                                         <div class="contact__content" id="wsp" style="display:none;">
                                            <label for="user" class="contact__label">
                                                <i class="uil uil-whatsapp contact__label"></i>
                                                Whatsapp
                                                <input type="text" name="wpp" id="whatsapp" class="contact__input" autocomplete="off" placeholder="Ingrese su número de Whatsapp aquí" >
                                            </label>
                                        </div>
                                        <div class="contact__content">
                                            <label for="resp" class="contact__label">
                                                <i class="uil uil-question-circle contact__label"></i>
                                                ¿Por qué quieres descargar mi cv?
                                                <input type="text" name="resp" class="contact__input" autocomplete="off" placeholder="Ingrese su breve respuesta aquí">
                                            </label>
                                        </div>

                                        
                                        <!-- <php $resultado = mysqli_query($conexion, $descarga);
                                            while($row = mysqli_fetch_assoc($resultado)){
                                            ?> -->
                                            <?php 
                                            // $descarga = "SELECT * FROM cv WHERE id='$ultidagg'";
                                            // $ultidagg = mysqli_insert_id($conexion);
                                            // $resultado = mysqli_query($conexion, $descarga);
                                            // $row = mysqli_fetch_assoc($resultado);
                                            $sql = "SELECT * FROM cv ORDER by ID desc LIMIT 1";
                                            $resultado =mysqli_query($conexion, $sql);
                                           $row = mysqli_fetch_assoc($resultado);

                                            


                                            ?>
                                        <a id="descargar1" style="display: none;" href="admin/<?php echo $row["ruta"];?>" download="CV-FabrizioFerroni.pdf"><?php  echo "Descargar : ".$row["id"]. " - " .$row["nombre"]; ?></a>
                                        <!-- <a id="descargar1" style="display: block;" href="admin/<?php echo $row["ruta"];?>" download>Descargar</a> -->
                                        <!-- <php }?> -->

                                        <!-- <a id="descargar22" style="display: none;" href="public/cv/cvfabrizioferronipdf.pdf" download="CVFabrizioFerroni.pdf">Descargar</a> -->
                                    </div>
                                    <div>
                                        <button type="submit" name="register" class="button button-flex register__button2">
                                            Descargar
                                            <i class="uil uil-download-alt button__icon"></i>
                                        </button>

                                        <!-- <input type="submit" value="Descargar" class="button button-flex register__button2"> -->
                                        
                                    </div>
                                </form>
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--==================== SKILLS ====================-->
        <section class="skills section" id="habilidades">
            <h2 class="section__title">Habilidades</h2>
            <span class="section__subtitle">Mi nivel tecnico</span>
            <div class="skills__container container grid">
                <div>
                    <!--=================== SKILLS 1 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Desarrollador frontend</h1>
                                <span class="skills__subtitle">
                                    Más de 4 años
                                </span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"> HTML
                                    </h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Desarrollador backend</h1>
                                <span class="skills__subtitle">
                                    Más de 2 años
                                </span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"> PHP
                                    </h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">
                                        Node JS
                                    </h3>
                                    <span class="skills_number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">
                                        Firebase
                                    </h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__firebase">
                                    </span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills_number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--=================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Diseñador</h1>
                                <span class="skills__subtitle">
                                    Más de 5 años
                                </span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name"> Figma
                                    </h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">
                                        Sketch
                                    </h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch"></span>
                                </div>
                            </div>
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">
                                        Photoshop
                                    </h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <!-- <section class="qualification section"> -->
            <h2 class="section__title">Calificación</h2>
            <span class="section__subtitle">Mi viaje personal</span>
            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i> Educación
                    </div>
                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>Trabajo
                    </div>
                </div>
                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Ingeniero Informático</h3>
                                <span class="qualification__subtitle">UNC - Argentina</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2014 - 2020
                                </div>
                            </div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <div class="qualification__line"></div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <div class="qualification__line"></div>
                            </div>
                            <div>
                                <h3 class="qualification__title">Diseño Web</h3>
                                <span class="qualification__subtitle">Next-U - USA</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2017 - 2020
                                </div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Desarrollo Web</h3>
                                <span class="qualification__subtitle">Next-U - USA</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2020 - 2022
                                </div>
                            </div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <div class="qualification__line"></div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <!-- <div class="qualification__line"></div> -->
                            </div>
                            <div>
                                <h3 class="qualification__title">Maestría en Ui / Ux</h3>
                                <span class="qualification__subtitle">Coursera - Universidad</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2022 - 2025
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content" data-content id="work">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Ingeniero de software</h3>
                                <span class="qualification__subtitle">Microsoft - Argentina</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2016 - 2018
                                </div>
                            </div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <div class="qualification__line"></div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <div class="qualification__line"></div>
                            </div>
                            <div>
                                <h3 class="qualification__title">Desarrollador frontend</h3>
                                <span class="qualification__subtitle">Apple Inc - USA</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2018 - 2020
                                </div>
                            </div>
                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Diseño Ui</h3>
                                <span class="qualification__subtitle">Figma - España</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i> 2017 - 2019
                                </div>
                            </div>
                            <div>
                                <div class="qualification__rounder"></div>
                                <!-- <div class="qualification__line"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== SERVICES ====================-->
        <section class="services section" id="servicios">
            <h2 class="section__title">Servicios</h2>
            <span class="section__subtitle">Lo que ofrezco</span>
            <div class="services__container container grid">
                <!--==================== SERVICES 1 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Diseñador <br> Ui / Ux</h3>
                    </div>
                    <span class="button button--flex button small button--link services__button">
                        Ver Mas
                        <i class="uil uil-angle-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Diseñador <br> Ui / Ux</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo la interfaz de usuario.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo de páginas web.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Creo interacciones de elementos ux.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Posiciono la marca de tu empresa.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 2 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Desarrollador <br> Frontend</h3>
                    </div>
                    <span class="button button--flex button small button--link services__button">
                        Ver Mas
                        <i class="uil uil-angle-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Desarrollador <br> Frontend</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo la interfaz de usuario.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo de páginas web.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Creo interacciones de elementos ux.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Posiciono la marca de tu empresa.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 3 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Desarrollador <br> Backend</h3>
                    </div>
                    <span class="button button--flex button small button--link services__button">
                        Ver Mas
                        <i class="uil uil-angle-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Desarrollador <br> Backend</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo la interfaz de usuario.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Desarrollo de páginas web.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Creo interacciones de elementos ux.
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> Posiciono la marca de tu empresa.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portafolio">
            <h2 class="section__title">Portafolio</h2>
            <span class="section__subtitle">Trabajo mas reciente</span>
            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Sitio web moderno</h3>
                            <p class="portfolio__description">Sitio web adaptable a todos los dispositivos, con componentes de interfaz de usuario e interacciones animadas.</p>
                            <a href="#" class="button button--flex button small portfolio__button">Demo <i class="uil uil-arrow-right button__icon"></i></a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 2 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Diseño de la marca</h3>
                            <p class="portfolio__description">Sitio web adaptable a todos los dispositivos, con componentes de interfaz de usuario e interacciones animadas.</p>
                            <a href="#" class="button button--flex button small portfolio__button">Demo <i class="uil uil-arrow-right button__icon"></i></a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 3 ====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">
                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Tienda en línea</h3>
                            <p class="portfolio__description">Sitio web adaptable a todos los dispositivos, con componentes de interfaz de usuario e interacciones animadas.</p>
                            <a href="#" class="button button--flex button small portfolio__button">Demo <i class="uil uil-arrow-right button__icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-pagination"> </div>
            </div>
        </section>
        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <!-- <section class="project section"> -->
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">Tienes un nuevo proyecto</h2>
                        <p class="project__description">Contáctame ahora y obtén un 30% de descuento en tu nuevo proyecto.</p>
                        <a href="#contacto" class="button button--flex button--white">
                            Contáctame
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>
                    <img src="assets/img/project.png" alt="" class="project__img">
                </div>
            </div>
        </section>
        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">
            <!-- <section class="testimonial section"> -->
            <h2 class="section__title">Testimonios</h2>
            <span class="section__subtitle">Mis clientes dicen</span>
            <div class="testimonial__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== TESTIMONIAL 1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">
                                <div>
                                    <h3 class="testimonial__name">Sara Smith</h3>
                                    <p class="testimonial__client">Cliente</p>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial__description">
                            Me da una buena impresión, llevo a cabo mi proyecto con toda la calidad y atención posible y apoyo las 24 horas del día.
                        </p>
                    </div>
                    <!--==================== TESTIMONIAL 2 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">
                                <div>
                                    <h3 class="testimonial__name">Matias Robison</h3>
                                    <p class="testimonial__client">Cliente</p>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial__description">
                            Me da una buena impresión, llevo a cabo mi proyecto con toda la calidad y atención posible y apoyo las 24 horas del día.
                        </p>
                    </div>
                    <!--==================== TESTIMONIAL 3 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">
                                <div>
                                    <h3 class="testimonial__name">Raul Harris</h3>
                                    <p class="testimonial__client">Cliente</p>
                                </div>
                            </div>
                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial__description">
                            Me da una buena impresión, llevo a cabo mi proyecto con toda la calidad y atención posible y apoyo las 24 horas del día.
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-testimonial"> </div>
            </div>
        </section>
        <!--==================== CONTACT ME ====================-->
        <!-- <section class="contact section" id="contact"> -->
        <section class="contact section" id="contacto">
            <h2 class="section__title">Contáctame</h2>
            <span class="section__subtitle">Ponete en contacto conmigo</span>
            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Llámame</h3>
                            <span class="contact__subtitle">999-777-666</span>
                        </div>
                    </div>
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">info@fabriziodeveloper.com</span>
                        </div>
                    </div>
                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>
                        <div>
                            <h3 class="contact__title">Localización</h3>
                            <span class="contact__subtitle">Tucuman 512 - Córdoba, Argentina</span>
                        </div>
                    </div>
                </div>
                <!-- Aquí va el form -->
                
                <form method="POST" enctype="multipart/form-data" class="contact__form grid" id="miForm" autocomplete="off">

                
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="name" class="contact__label">Nombre</label>
                            <input type="text" class="contact__input" name="name" autocomplete="off">
                        </div>
                        <div class="contact__content">
                            <label for="lastname" class="contact__label">Apellido</label>
                            <input type="text" class="contact__input" name="lastname" autocomplete="off">
                        </div>
                    </div>
                    
                    
                        <div class="contact__content">
                            <label for="email" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email" autocomplete="off">
                        </div>
                        <div class="contact__content">
                            <label for="whatsapp" class="contact__label">Whatsapp</label>
                            <input type="text" id="whatsapp2" class="contact__input" name="whatsapp" autocomplete="off">
                        </div>
                    <div class="contact__content">
                            <label for="subject" class="contact__label">Asunto</label>
                            <input type="text" class="contact__input" name="subject" autocomplete="off">
                        </div>
                    <div class="contact__content">
                        <label for="message" class="contact__label">Mensaje</label>
                        <textarea  id="" cols="30" rows="10" class="contact__input" name="message" autocomplete="off" maxlength="1000"></textarea>
                    </div>
                    <div>

                   

                    <!-- <input type="submit" value="Enviar" title="Enviar Consulta" class="button button-flex"> -->

                    <button type="submit" name="contactme" class="button button-flex contact__button">
                                    Enviar Mensaje
                                            <i class="uil uil-message button__icon"></i>
                                        </button>
                        <!-- <a href="" class="button button-flex">
                            Enviar Mensaje
                            <i class="uil uil-message button__icon"></i>
                        </a> -->
                    </div>
                </form>
                <div class="mostrar"></div>
            </div>
        </section>
    </main>
    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Fabrizio Developer</h1>
                    <span class="footer__subtitle">Desarrollador backend y frontend</span>
                </div>
                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Servicios</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portafolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contactame</a>
                    </li>
                </ul>
                <div class="footer__socials">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; Fabrizio Developer. Todos los derechos reservados.</p>
        </div>
    </footer>
    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    <!--==================== FUNCION SOLO NUMEROS ====================-->
    <script type="text/javascript">
        $("#whatsapp").numeric();
        $("#whatsapp2").numeric();
    </script>
    <!--==================== NUMERIC JS ====================-->
    <script src="assets/js/jquery.min.js"></script>
<script>

$(function() {
            $('.contact__form').submit(function() {
                $.ajax({
                    url: 'contactme.php',
                    type: 'POST',
                    data: $('.contact__form').serialize(),
                    success: function(data) {
                        $('.mostrar').html(data);
                        //	$('.form')[0].reset();
                    }
                });
                return false;
            });
        });
</script>
 
    <!--==================== SWIPER JS ====================-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--==================== HTML2PDF JS ====================-->
    <!-- <script src="assets/js/html2pdf.bundle.min.js"></script> -->
    <!--==================== MAIN JS ====================-->
    <script src="assets/js/web.js"></script>
</body>

</html>