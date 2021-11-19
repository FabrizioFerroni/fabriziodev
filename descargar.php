<?php
include("db.php");
error_reporting(0);
$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$wpp = trim($_POST['wpp']);
$resp = trim($_POST['resp']);
$comunico = trim($_POST['contact']);
date_default_timezone_set('America/Argentina/Cordoba');
$fechadesc = date('d/m/y - H:i');

$descarga = "SELECT * FROM cv";

if(isset($_POST['register'])){
    if(strlen($name) >=1 && strlen($lastname) >=1 && strlen($email) >=1 && strlen($wpp) >=1 && strlen($resp) >=1 && strlen($comunico) >=1){
        $consulta = "INSERT INTO descargasweb(nombre, apellido, email, whatsapp, respuesta, comunico, fechadedesc) VALUES ('$name','$lastname','$email','$wpp','$resp','$comunico','$fechadesc')";
        $resultado =  mysqli_query($conexion, $consulta) or die (mysql_error());
       if($resultado){
        ?>

        <?php $resultado = mysqli_query($conexion, $descarga);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
        <script type="text/javascript">
             $(document).ready(function () {
                  function download(){
                     alert("Descargando archivo");
                  }
            })
            Swal.fire({
                icon: 'success',
                title: 'Gracias por descargar mi CV',
                confirmButtonText: `Aceptar`,
                confirmButtonColor: "#CB4343", 
                }).then((result) => {
                if (result.isConfirmed) {
                    // location.href = "admin/<php echo $row["ruta"]; ?>";
                    document.getElementById("descargar1").click();

                   
                } 
            });
            
           
        </script>
        <?php  }?>
       <?php
        //  header("location:index.php");
        
       }else{
        ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Ups hay algo que esta funcionando mal.',
                confirmButtonColor: "#CB4343", 
                // footer: 'Fabrizio Ferroni'
            });
        </script>
       <?php
       }
    } else{
        ?>
          <script type="text/javascript">
            Swal.fire({
                icon: 'warning',
                title: 'Ops...',
                confirmButtonText: `Aceptar`,
                confirmButtonColor: "#CB4343", 
                text: 'Completa todos los campos obligatorios!',
                // footer: 'Fabrizio Ferroni'
            });
        </script>
        <?php $resultado = mysqli_query($conexion, $descarga);
                    while($row = mysqli_fetch_assoc($resultado)){
                    ?>
        <div class="error__login">
            <h3 class="error" style="color: white; font-size: var(--small-font-size);">¡Por favor completa todos los campos obligatorios! </h3>
        </div>
        <?php  }?>
        <?php
    
    }
}
?>