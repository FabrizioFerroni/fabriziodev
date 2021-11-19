<?php 
include("../db.php");
$descarga = "SELECT * FROM cv";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <table>
    <thead>
    <tr>
    <td>Id</td>
    <td>Ruta</td>
    <td>Nombre</td>
    <td>Descripción</td>    
    </tr>
    </thead>
    <tbody>
    <?php $resultado = mysqli_query($conexion, $descarga);
        while($row = mysqli_fetch_assoc($resultado)){
    ?> 
    <tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["ruta"];?></td>
    <td><?php echo $row["nombre"];?></td>
    <td><?php echo $row["descripcion"];?></td>
    </tr>
    <?php } mysqli_free_result($resultado);?>
    </tbody>
    </table>


   



    


    <?php $resultado = mysqli_query($conexion, $descarga);
        while($row = mysqli_fetch_assoc($resultado)){
    ?> 
        <a id="prueba" href="<?php echo $row["ruta"];?>" target="_blank">Ver CV</a>
<?php } mysqli_free_result($resultado);?>





<br></br> <br>
<input type="file" name="file" id="">

<br> <br> <br>
<?php
// echo rand() . "\n";
// echo rand() . "\n";

echo rand(1,9999);



echo "<br>";
echo "<br>";
echo "<br>";
print_r($_SERVER);
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];

echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];


?>
</body>
</html>