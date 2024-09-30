<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php'; // Asegúrate de que esta ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $celular = htmlspecialchars($_POST['celular']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'localhost'; // Usando localhost para Mercury
        $mail->SMTPAuth = false;   // No autenticación
        $mail->Port = 25;          // Puerto 25 por defecto para SMTP sin autenticación

        // Configuración del correo
        $mail->setFrom($email, "$nombre $apellido");
        $mail->addAddress('eber_em@hotmail.com'); // Destinatario
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de $nombre $apellido desde el formulario";
        $mail->Body    = "Nombre: $nombre<br>Apellido: $apellido<br>Email: $email<br>Celular: $celular<br>Mensaje:<br>$mensaje";

        $mail->send();
        echo "Mensaje enviado con éxito.";
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
