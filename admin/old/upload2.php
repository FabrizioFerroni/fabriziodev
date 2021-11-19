<?php
include("../db.php");
// $nombre = trim($_POST['name']);
// $directorio = "../cv/";
// $ruta = $_FILES["file"]["name"];
// $archivo= $directorio . basename($ruta);
// // echo $archivo;
// $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
// $chkimg = getimagesize($_FILES["file"]["tmp_name"]);

// if($chkimg !=true){
//     $size = $_FILES["file"]["size"];
//     if($size > 40000000){
//         echo "El tamaño supera lo permitido por el servidor";
//     }else{
//         if($tipoArchivo == "pdf"){
//             if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
//                 echo "El archivo se subio correctamente";
//             }
//             else{
//                 echo "El archivo no se pudo subir correctamente";
//             }
//         }else{
//             echo "Solo se admite archivos en formatos pdf"; 
//         }
//     }
// }else{
//     echo "El documento es una imagen";
// }
// $nombre = $_FILES["file"]["name"];
$guardado = $_FILES["file"]["tmp_name"];
$directorio = "../public/cv/";
$ruta = $_FILES["file"]["name"];
$archivo= $directorio . basename($ruta);
$size = $_FILES["file"]["size"];
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

if(!file_exists('../public/cv')){
    mkdir('../public/cv', 0777, true);
    if(file_exists('../public/cv')){
        if($size > 40000000){
                 echo "El tamaño supera lo permitido por el servidor";
        }else{
            if($tipoArchivo == "pdf"){
                if(move_uploaded_file($guardado, $archivo)){
                    echo "Archivo guardado con éxito";
                }else{
                    echo "No se pudo guardar el archivo";
                }    
            } else{
                echo "Solo se admite archivos en formatos pdf"; 
            } 
        }
    }
}else{
    if($size > 40000000){
        echo "El tamaño supera lo permitido por el servidor";
    }else{
         if($tipoArchivo == "pdf"){
            if(move_uploaded_file($guardado, $archivo)){
                 echo "Archivo guardado con éxito";
            }else{
                 echo "No se pudo guardar el archivo";
            }    
        }else{
            echo "Solo se admite archivos en formatos pdf"; 
        }
           
}
}


?>