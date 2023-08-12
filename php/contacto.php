<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $mensaje = $_POST["mensaje"];

    if (!empty($email)) {
        // Configura el destinatario y el asunto del correo electrónico
        $destinatario = "hola@renta-stands.mx";
        $asuntoCorreo = "Nuevo mensaje de contacto";

        // Contenido del correo electrónico
        $contenido = "Nombre: $nombre\n";
        $contenido .= "Email: $email\n";
        $contenido .= "Número de Contacto: $numero\n";
        $contenido .= "Mensaje:\n$mensaje\n";

        // Envía el correo electrónico
        mail($destinatario, $asuntoCorreo, $contenido);

        echo "¡Correo enviado exitosamente!";
    } else {
        echo "Por favor, ingrese su dirección de correo electrónico.";
    }
}
?>
