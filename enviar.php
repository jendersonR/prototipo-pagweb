<?php

$destino= "j84ro@hotmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " . $nombre . "\nEmail: " . $email ."\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("location:index.html");

?>