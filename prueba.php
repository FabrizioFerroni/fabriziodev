<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba email</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.numeric.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/web.css">
</head>
<body>
<form action="" enctype="multipart/form-data" method="POST" class="contact__form" id="miForm" autocomplete="off">
                    <input type="text" name="name" placeholder="Nombre y Apellido" title="Por favor indicar su Nombre y Apellido" class="contact__input" autocomplete="off">
                    <input type="email" name="email" placeholder="Email" title="Por favor poner su dirección de email" class="contact__input" autocomplete="off">
                    <input type="text" name="telefono" id="numeric" placeholder="Whatsapp" title="Por favor poner el numero de whatsapp sin el 0 y 15 adelante del numero, pero si poner el prefijo de pais, por ejemplo 54 que corresponde a Arg" autocomplete="off" class="contact__input">
                    <input type="text" name="subject" placeholder="Asunto" title="Por favor poner su asunto de contacto" class="contact__input" autocomplete="off">
                    <textarea name="message" id="" cols="0" rows="10" title="Por favor poner su mensaje que me quiere dejar, con gusto lo leere" autocomplete="off" class="contact__input" placeholder="Escriba aquí su mensaje..."></textarea>
                    <input type="submit" value="Enviar" title="Enviar Consulta" class="contact__button button"> <input onclick="limpiarFormulario()" class="contact__button button" title="Borrar Formulario" type="reset" value="Borrar" />
                </form>
                <div class="mostrar"></div>

                <!-- Scripts -->
    <script>
        $(function() {
            $('.contact__form').submit(function() {
                $.ajax({
                    url: 'prueba2.php',
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
    <script type="text/javascript">
        // $("#numeric").numeric();
    </script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    
</body>
</html>