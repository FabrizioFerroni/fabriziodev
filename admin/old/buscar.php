<?php

include("conexion.php");

$buscar = $_POST["buscar"];

$SQL_READ = "SELECT * FROM contacto WHERE name LIKE '%".$buscar."%' OR  lastname LIKE '%".$buscar."%'  OR email LIKE '%".$buscar."%'  OR whatsapp LIKE '%".$buscar."%'  OR  subject LIKE '%".$buscar."%'  OR message LIKE '%".$buscar."%' ";

$SQL_QUERY = mysqli_query($con, $SQL_READ);


