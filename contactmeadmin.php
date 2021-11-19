<?php
include("db.php");
// error_reporting(0);
$leido = 0;
$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$wpp = trim($_POST['whatsapp']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);
date_default_timezone_set('America/Argentina/Cordoba');
$diassemana = array("Dom","Lun","Mar","Mié","Jue","Vie","Sáb");
$nomdia = $diassemana[date('w')];
$hora = date('H:i');
$fechadesc = date('d/m/y');

if(isset($_POST["contactme"])){
    
     if(strlen($name) >=1 && strlen($lastname) >=1 && strlen($email) >=1 && strlen($wpp) >=1 && strlen($subject) >=1 && strlen($message) >=1){

         $sql = "INSERT INTO contacto(leido, name, lastname, email, whatsapp, subject, message, dia, fechadecont, horadecontacto) VALUES ('$leido','$name', '$lastname','$email','$wpp','$subject','$message', '$nomdia','$fechadesc', '$hora')";

         $ejecutar = mysqli_query($conexion, $sql) or die(mysqli_error());
        
        if($ejecutar){
            ?>
             <script type="text/javascript">             
                 Swal.fire({
                     icon: 'success',
                     title: 'Gracias por ponerte en contacto conmigo',
                     text: 'Pronto respondere tus dudas',
                     confirmButtonText: `Aceptar`,
                     confirmButtonColor: "#CB4343", 
                     }).then((result) => {
                     if (result.isConfirmed) {
                         document.getElementById("miForm").reset();
                     } 
                 });
              </script>               
              <?php
         }else{
             ?>
             <script type="text/javascript">
                 Swal.fire({
                     icon: 'error',
                     title: 'Ups hay algo que esta funcionando mal.',
                     confirmButtonText: `Aceptar`,
                     confirmButtonColor: "#CB4343", 
                 });
             </script>
            <?php
         }






 
           
    }else{
        ?>
        <script type="text/javascript">
          Swal.fire({
              icon: 'warning',
              title: 'Ops...',
              confirmButtonText: `Aceptar`,
              confirmButtonColor: "#CB4343", 
              text: 'Completa todos los campos obligatorios!',
          });
      </script>

        <!-- <div class="error__login">
            <h3 class="error" style="color: white; font-size: var(--small-font-size);">¡Por favor completa todos los campos obligatorios! </h3>
        </div> -->
        <?php
    }
}