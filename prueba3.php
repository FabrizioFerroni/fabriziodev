<?php
include("db.php");

 $sql = "SELECT * FROM cv ORDER by ID desc LIMIT 1";
 $resultado =mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($resultado);
date_default_timezone_set('America/Argentina/Cordoba');
setlocale(LC_ALL, 'spanish');
// locale_set_default('es-ES');
$hora = date('D   d/m/y - H:i');
echo "Último id agregado: ".$row["id"] ." - ".$row["nombre"] ." ";
echo "<br>";
echo $hora;
echo "<br>";
// echo  utf8_encode(strftime("%a"));

// echo locale_get_default();
echo "<br>";
// set_locale(LC_ALL,"es_ES@euro","es_ES","esp");
// echo substr(strftime("%A"),1,-1);


$diassemana = array("Dom","Lun","Mar","Mié","Jue","Vie","Sáb");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
echo "<br>";
$nomdia = $diassemana[date('w')];
$fecha = date('d/m/y');
echo "<br>";
echo $nomdia;
echo "<br>";
echo $fecha;





//Salida: Miercoles 05 de Septiembre del 2016


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<br> <br><br><br>
    <a href="prueba4.php?id=<?php echo $row["id"]; ?>"> Pruebaaa</a>


    <form action="enviarmail.php" method="POST" enctype="multipart/form-data" class="contact__form" id="miForm" autocomplete="off">
<label for="">Nombre: <input type="text" name="name"></label>
<br>
<label for="">Email: <input type="text" name="email"></label>
<br>
<label for="">Asunto: <textarea name="subject" id="" cols="30" rows="10"></textarea></label>
<br>
<input type="submit">

    </form>
</body>
</html>