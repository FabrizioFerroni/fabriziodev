<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    
    $id = $_POST['id'];
    // echo $id;
    $name = $con->real_escape_string(htmlentities($_POST['name']));
    $lastname = $con->real_escape_string(htmlentities($_POST['lastname']));
    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $user = $con->real_escape_string(htmlentities($_POST['user']));
  

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
        
                    if ($file_name != '' || $file_name != null) {
                        $deletefile = "SELECT * FROM users WHERE id='$id'";
                
                        $resultado2 = mysqli_query($con, $deletefile);
                        
                        while($row = mysqli_fetch_assoc($resultado2)){
                            if($row["rutaimg"] == null){
                            }else{unlink($row["rutaimg"]);}

                            
                        }
                
                
                        $edit = $con->query("UPDATE users SET name = '$name', lastname = '$lastname', rutaimg = '$new_name_file' WHERE id = '$id'");
                            if ($edit) {
                                echo 'success';
                            } else {
                                echo 'fail';
                            }
                    }else{
                        $edit = $con->query("UPDATE users SET name = '$name', lastname = '$lastname'  WHERE id = '$id'");                
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