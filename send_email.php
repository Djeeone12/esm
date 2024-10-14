<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $opcion = $_POST['opcion'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo a la que se enviará el formulario
    $to = "gadjeegregory36@gmail.com";  // Reemplaza con tu dirección de correo
    $subject = "Formulario de Contacto: $opcion";

    // Construir el mensaje de correo
    $body = "Nombre: $nombre\n";
    $body .= "Email: $email\n";
    $body .= "Opción seleccionada: $opcion\n\n";
    $body .= "Mensaje:\n$mensaje";

    // Encabezados de correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
