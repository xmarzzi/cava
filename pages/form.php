<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['celular'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "xavier.martinuzzi@gmail.com";
$asunto = "Contacto desde CAVA | Tienda digital de vinos";

$carta = "Este mensaje fue enviado por: : $nombre \n";
$carta = "Su e-mail es: : $correo \n";
$carta = "Telefono de contacto : $telefono \n";
$carta = "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header ('Location:exito.html');

?>