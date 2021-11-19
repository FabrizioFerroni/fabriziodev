<?php 
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["name"];
$host = $_POST["host"];
$port = $_POST["port"];
$smtpsecure = $_POST["smtpsecure"];
$username = $_POST["username"];
$password = $_POST["password"];
$password2 = hash('sha512', $password);


// echo $id;

$config = "UPDATE configuraciones SET nombre ='$nombre', host ='$host', port ='$port', smtpsecure ='$smtpsecure', username ='$username',password ='$password2' WHERE  id = '$id' ";

$edit = $con->query($config);

if($edit){
    echo 'success';
} else{
    echo 'fail';
}

?>