<?php

$destinatario = 'jendersonrodriguezgonzalez.gmail.com';
//correo donde se enviara el mensaje
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la pagina TST";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $mensajeCompleto, $header);
echo "<script>alert(' correo enviado exitosamente ')</script>";
echo "<script> setTimeout (\"location.href='index.html'\",1000) </script>";

?>
