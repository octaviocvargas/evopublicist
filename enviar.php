<?php

//llamando los campos

$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Teléfono: " . $phone . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Asunto: " . $message . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'octaviocvargas@gmail.com';
$asunto = 'Mensaje de mi sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://evopublicist.com/mensaje-enviado.html';</script>";

?>