<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    
    $id = $_POST['id'];
    $name = $con->real_escape_string(htmlentities($_POST['name']));
    $lastname = $con->real_escape_string(htmlentities($_POST['lastname']));
    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $user = $con->real_escape_string(htmlentities($_POST['user']));
    $ca = $con->real_escape_string(htmlentities($_POST['password']));
    $nc = $con->real_escape_string(htmlentities($_POST['npassword']));
    $rnc = $con->real_escape_string(htmlentities($_POST['rpassword']));

    // echo $id;

    $cah = hash('sha512', $ca);
    $nch = hash('sha512', $nc);
    $rnch = hash('sha512', $rnc);

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        // if ($extension == 'pdf') {
            if ($extension) {
            $dir = 'dist/img/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $aleatorio = rand(1,99);
            $file_tmp_name = $_FILES['file']['tmp_name'];
            // $new_name_file = $dir . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '-'. $aleatorio .'.' . $extension;
            // $new_name_file = file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                
            }
        }
    }

    
    if(strlen($name) >=1 && strlen($lastname) >=1){
        // $ins = $con->query("INSERT INTO cv(ruta,nombre,descripcion, version) VALUES ('$new_name_file','$name','$description', '$version')");
        if ($file_name != '' || $file_name != null) {
            $deletefile = "SELECT * FROM users WHERE id='$id'";

            $resultado2 = mysqli_query($con, $deletefile);
            
            while($row = mysqli_fetch_assoc($resultado2)){
                unlink($row["rutaimg"]);
            }


            $edit = $con->query("UPDATE users SET name = '$name', lastname = '$lastname', email = '$email', usuario = '$user', contraseña = '$cah', rutaimg = '$new_name_file' WHERE id = '$id'");

                if ($edit) {
                    echo 'success';
                } else {
                    echo 'fail';
                }
            }else{
                $edit = $con->query("UPDATE users SET name = '$name', lastname = '$lastname', email = '$email', usuario = '$user', contraseña = '$cah' WHERE id = '$id'");

            if ($edit) {
                echo 'success';
            } else {
                echo 'fail';
            }
            }
  }else{
      echo 'warning';
  }
} else {
    echo 'fail';
}