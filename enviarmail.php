<?php
// use assets\mail\PHPMailer;
// use assets\mail\Exception;

// require 'assets/mail/Exception.php';
// require 'assets/mail//PHPMailer.php';
// require 'assets/mail/SMTP.php';

// error_reporting(0);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
// if($_POST){
	
// 	if(empty($name) || empty($email)  || empty($subject)){
// 		echo '<script>
// 			$(document).ready(function(){
// 				swal("Ops...","Completa todos los campos obligatorios!","warning");
// 			});
// 			</script>';
// 	}else{
		
//         $host       = $_SERVER["HTTP_HOST"];
//         $contacto   = '<a href="https://'.$host.'" target="_blank">https://'.$host.'';
// 		$assunto 	= 'Te han contactado desde tu sitio web personal Fabrizio Ferroni';
// 		$imagen2 = '<img src="https://i.postimg.cc/15GBG4BL/faviconff2.png" witdh="">';

       
		
// 		// require_once('assets/mail/PHPMailerAutoload.php');

// 		$Email = new PHPMailer();
// 		$Email->SetLanguage("ar");
// 		$Email->IsSMTP(); 
// 		$Email->SMTPAuth = true; 
// 		$Email->Host = 'mail.fabrizioferroni.com.ar'; 
// 		$Email->Port = '465'; 
// 		$Email->SMTPSecure = 'ssl';
// 		$Email->Username = 'info@fabrizioferroni.com.ar'; 
// 		$Email->Password = 'Fa39967592Fe#';
// 		$Email->IsHTML(true); 
// 		$Email->setFrom($email, $name);
// 		$Email->AddReplyTo($email, $name);
// 		$Email->AddAddress('info@fabrizioferroni.com.ar', 'Fabrizio Ferroni');
// 		$Email->addCC('fabrizioferroni@outlook.com', 'Fabrizio Ferroni');
// 		$Email->Subject = utf8_decode($assunto);
// 		$Email->Body .= "<br />
// 							$imagen2 <br /><br />
// 							<strong>Nombre:</strong> $name<br />									
// 							<strong>E-mail:</strong> $email<br />
							
// 							<strong>Mensaje:</strong> $subject<br />
// 							<strong>Te contactaron desde:</strong> $contacto<br />								
// 							";	
// 		if(!$Email->Send()){				
// 			 echo'
// 			<script>
// 				$(document).ready(function(){
// 					swal("Ups '.utf8_encode($name).'...","Algo salió mal, pruebe volver a intentarlo nuevamente. Gracias!", "error");
// 				});
               
// 			</script>';

// 		}else{
// 			 echo'
// 		<script>
// 			$(document).ready(function(){
// 				swal("Gracias '.utf8_encode($name).' por contactarse con nosotros....", "  \n A la brevedad nos estaremos comunicando con usted!", "success");
//                 });
//                 limpiarFormulario();
// 		</script>';

// 		}		
// 	}
// }