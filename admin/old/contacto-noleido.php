<?php
include("conexion.php");

// $id = $_GET["id"];
$id = $_POST["id"];
$leido = 0;
$leidomr = "UPDATE contacto SET leido = '$leido' WHERE id = '$id'";

$resultado = mysqli_query($con, $leidomr);