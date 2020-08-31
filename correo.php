<?php

if (isset($_POST['enviar'])){
	if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) && !empty($_POST['correo'])){
		$name = $_POST['nombre'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];
		$email = $_POST['correo'];
		$header = "From: noreply@example.com" . "\r\n";
		$header. = "Reply-to: noreply@example.com" . "\r\n";
		$header. = "X-Maile: PHP/" . phpversion();
		$mail =	mail($email,$asunto,$mensaje,$header);
		if(mail){
			echo "<h4> Correo enviado exitosamente</h4>";
		}
	}

}	
	

?>