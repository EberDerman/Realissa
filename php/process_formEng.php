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
        $mail->Host = 'smtp.donweb.com'; // Host SMTP de DonWeb
        $mail->SMTPAuth = true;          // Activar autenticación SMTP
        $mail->Username = ''; // Tu dirección de correo
        $mail->Password = ''; // Tu contraseña de correo
        $mail->SMTPSecure = 'tls';       // Habilitar cifrado TLS
        $mail->Port = 587;               // Puerto 587 para TLS

        // Configuración del correo
        $mail->setFrom($email, "$nombre $apellido");
        $mail->addAddress('formulario@realissadevelopments.com'); // Destinatario
        $mail->isHTML(true);
        $mail->Subject = "New message from $nombre $apellido through the form";
        $mail->Body    = "Name: $nombre<br>Last Name: $apellido<br>Email: $email<br>Mobile: $celular<br>Message:<br>$mensaje";

        $mail->send();
        echo "Message sent successfully.";
    } catch (Exception $e) {
        echo "Error sending message: {$mail->ErrorInfo}";
    }
}
