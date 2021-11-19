<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    
    
    $name = $con->real_escape_string(htmlentities($_POST['name']));
    $lastname = $con->real_escape_string(htmlentities($_POST['lastname']));
    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $user = $con->real_escape_string(htmlentities($_POST['user']));
    $ca = $con->real_escape_string(htmlentities($_POST['password']));
    $rnc = $con->real_escape_string(htmlentities($_POST['rpassword']));

    $cah = hash('sha512', $ca);

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    $verificar_correo = $con->query("SELECT * FROM users WHERE email ='$email'");
    $verificar_user = $con->query("SELECT * FROM users WHERE user ='$user'");

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        // if ($extension == 'png') {
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

    
    if(mysqli_num_rows($verificar_user) > 0){
            echo 'incorrect';
    }else{
        if(mysqli_num_rows($verificar_correo) > 0){
            echo 'incorrect2';
        } else {
            if($ca === $rnc){
                if(strlen($name) >=1 && strlen($lastname) >=1 && strlen($user) >=1 && strlen($email) >=1 && strlen($ca) >=1){
                    $ins = $con->query("INSERT INTO users(name, lastname, email, user, pass, rutaimg) VALUES ('$name','$lastname', '$email', '$user', '$cah', '$new_name_file')");
        
        
                    
        
                    if ($ins) {
                        echo 'success';
                    } else {
                        echo 'fail';
                    }
                }else{
                    echo 'warning';
                }
            }else{
                echo 'info';
            }
        }
    }





} else {
    echo 'fail';
}