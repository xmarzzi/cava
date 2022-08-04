<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['celular'];
$mensaje = $_POST['caja'];

// Datos para el correo
$destinatario = "xavier.martinuzzi@gmail.com";
$asunto = "Contacto desde CAVA web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:exito.html');

?>