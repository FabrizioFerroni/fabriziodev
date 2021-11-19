<?php
include("conexion.php");

// $id = $_GET["id"];
$id = $_POST["id"];
$leido = 1;
// $leidomr = "UPDATE contacto SET leido = '$leido' WHERE id = '$id'";

$sql = "UPDATE contacto SET leido = '$leido' WHERE id = '$id'";

$resultado = mysqli_query($con, $sql);