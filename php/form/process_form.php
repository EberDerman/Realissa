<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Ruta relativa al autoloader desde el directorio `php/form`

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
        $mail->Host = 'localhost'; // Utiliza localhost para Mercury
        $mail->SMTPAuth = false;   // No necesitas autenticación
        $mail->Port = 25;          // Puerto por defecto para SMTP sin autenticación

        /*
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Tu correo de Gmail
        $mail->Password = 'your-password'; // Tu contraseña o contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;//Si tiene protocolo ssl(candado verde) agregar ssl, si no tiene agregar tls
        $mail->Port = 587;
*/
        // Configuración del correo
        $mail->setFrom($email, "$nombre $apellido");
        $mail->addAddress('eber.l.derman@gmail.com'); //destinatarios de correo electronico
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de $nombre $apellido desde el formulario";
        $mail->Body    = "Nombre: $nombre<br>Apellido: $apellido<br>Email: $email<br>Celular: $celular<br>Mensaje:<br>$mensaje";

        $mail->send();
        echo "Mensaje enviado con éxito.";
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
