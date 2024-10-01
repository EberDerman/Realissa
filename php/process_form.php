<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura de datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellido = htmlspecialchars(trim($_POST['apellido']));
    $email = htmlspecialchars(trim($_POST['email']));
    $celular = htmlspecialchars(trim($_POST['celular']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // Validar que todos los campos no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($celular) || empty($mensaje)) {
        header("Location: ../index.php?mensaje=error");
        exit();
    }

    // Destinatario del correo
    $destinatario = "formulario@realissadevelopments.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto";

    // Contenido del mensaje
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Apellido: $apellido\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Celular: $celular\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Cabeceras del correo
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        header("Location: ../indexEsp.php?mensaje=success");
    } else {
        header("Location: ../indexEsp.php?mensaje=error");
    }
} else {
    // Redirigir si no es un POST
    header("Location: ../indexEsp.php?mensaje=error");
}
?>
