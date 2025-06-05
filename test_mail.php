<?php
$to = "contacto@mowebcri.com";
$subject = "Prueba de mail()";
$message = "Este es un mensaje de prueba enviado desde PHP.";
$headers = "From: contacto@mowebcri.com\r\n";

if(mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>
