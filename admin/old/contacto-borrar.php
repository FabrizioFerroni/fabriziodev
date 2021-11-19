<?php
include('conexion.php');
$id = $_POST['id'];
// $id = $_GET['id'];
$delete = "DELETE FROM contacto WHERE id = '$id'" ;

$resultado = mysqli_query($con, $delete);