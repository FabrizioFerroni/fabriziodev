<?php

include('conexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $id = $_POST['id'];
    $ca = $con->real_escape_string(htmlentities($_POST['ca']));    
    $nc = $con->real_escape_string(htmlentities($_POST['nc']));
    $rnc = $con->real_escape_string(htmlentities($_POST['rnc']));


    $cah = hash('sha512', $ca);
    $nch= hash('sha512', $nc);
    $rnch = hash('sha512', $rnc);

    if(strlen($ca) >=1 && strlen($nc) >=1 && strlen($rnc) >=1){
        $psswd = "SELECT * FROM users WHERE id='$id'";

        $resultado2 = mysqli_query($con, $psswd);
        
        while($row = mysqli_fetch_assoc($resultado2)){
            if($row["pass"] == $cah){
                if($nch == $rnch){
                    $update  = $con->query("UPDATE users SET pass = '$rnch' WHERE id = '$id'");
                    if($update){
                        echo 'success';
                    }else{
                        echo 'fail';
                    }
                }
            }else{
                echo 'incorrect';
            }

        }


    }else{
        echo 'warning';
    }

}else {
    echo 'fail';
}