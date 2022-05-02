<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header.= "X-Mailer: PHP/"  . phpversion() . " \r\n";
$header.= "Mime-Version: 1.0 \r\n";
$hrader.= "Content_Type: text/plain";

$mensaje = "Este mensjae fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su email es: " . $email. "\r\n";
$mensaje .= "Su telefono de contacto es: " . $telefono ." \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";

$para = "sandramuraca78@gmail.com";
$asunto = "Mensaje desde portfolio";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
