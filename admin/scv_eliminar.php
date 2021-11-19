<?php
include('conexion.php');

$id = $_POST['id'];

$deletefile = "SELECT * FROM cv WHERE id='$id'";

$resultado2 = mysqli_query($con, $deletefile);
   
while($row = mysqli_fetch_assoc($resultado2)){
    unlink($row["ruta"]);
}

$delete = "DELETE FROM cv WHERE id = '$id'" ;

$resultado = mysqli_query($con, $delete);
