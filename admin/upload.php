<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $name = $con->real_escape_string(htmlentities($_POST['name']));
    $description = $con->real_escape_string(htmlentities($_POST['desc']));
    $version = $con->real_escape_string(htmlentities($_POST['version']));

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            $dir = '../public/cv/';
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

    
    if(strlen($name) >=1 && strlen($description) >=1 && strlen($new_name_file) >=1){
        $ins = $con->query("INSERT INTO cv(ruta,nombre,descripcion, version) VALUES ('$new_name_file','$name','$description', '$version')");

            if ($ins) {
                echo 'success';
            } else {
                echo 'fail';
            }
  }else{
      echo 'warning';
  }
} else {
    echo 'fail';
}