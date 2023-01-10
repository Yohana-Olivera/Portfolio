<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$subjet = $_POST['subjet'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Asunto: " . $subjet . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'portfolio_yolivera@hotmail.com';
$asunto = 'Formulario Contacto Portfolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>