<?php
include("db.php");
$id = $_GET["id"];

$id2 = $id - 1;

echo $id;
echo "<br>";
echo $id2;
echo "<br>";

$datos = "SELECT * FROM cv WHERE id = '$id'";

$sql = mysqli_query($conexion, $datos);
while ($row = mysqli_fetch_assoc($sql)){
    echo "<br>";
    echo $row["id"];
    echo "<br>";
    echo $row["ruta"];
    echo "<br>";
    echo $row["nombre"];
    echo "<br>";
    echo $row["descripcion"];
    echo "<br>";
}

