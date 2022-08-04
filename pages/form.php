<?php
$nombre = $_POST ['nombre'];
$telefono = $_POST ['celular'];
$email = $_POST ['correo'];
$mensaje = $_POST ['mensaje'];

$mensaje = "Este mensaje fue enviado por " $nombre  "\r\n";
$mensaje = "Su telefono es: " $telefono  "\r\n";
$mensaje = "Su e-mail es: " $email  "\r\n";
$mensaje = "Mensaje: " $_POST ['mensaje']  "\r\n";

$destinatario = "xavier.martinuzzi@gmail.com";
$asunto = "Este mail fue enviado desde la web CAVA";

mail ($destinatario, $asunto,$mensaje);
header('Location:exito.html');
?>