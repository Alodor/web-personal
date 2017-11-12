<?php

require 'lib/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$to = "info@alodor.com.ve"; // Correo de contacto

// Datos recogidos en el formulario
$nombre = htmlspecialchars($_POST['nombre']);
$email = htmlspecialchars($_POST['email']);
$telefono = htmlspecialchars($_POST['telefono']);
$asunto = htmlspecialchars($_POST['asunto']);
$mensaje = nl2br($_POST['mensaje']);

if (($nombre == "") || ($email == "") || ($telefono == "") || ($asunto == "") || ($mensaje == "")) {

    echo '<div class="card-panel red center">
            <span class="white-text">Todos los campos son requeridos para poder enviar el mensaje</span>
        </div>';

} else {

    $mail->From = $email;
    $mail->addAddress($to);
    $mail->Subject = $asunto;
    $mail->isHtml(true);
    $mail->Body = '<p>El siguiente mensaje fué enviado a través del sitio web:</p> 
                   <p>'.$mensaje.'</p><br>
                   <p>Por: <strong>'.$nombre.'</strong></p>
                   <p>Teléfono: '.$telefono.'</p>
                   <p>E-mail: '.$email.'</p>';

    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo '<div class="card-panel light-green accent-4 center">
            <span class="white-text">Tu mensaje ha sido enviado satisfactoriamente</span>
        </div>';

}