<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
  // Configuración del servidor SMTP
  $mail->isSMTP();
  $mail->Host = 'mail.sofuva.com';  // servidor SMTP del proveedor
  $mail->SMTPAuth = true;
  $mail->Username = 'dfvargas@sofuva.com';  // dirección de correo SMTP
  $mail->Password = 'regjyf-hyxmoj-5koxgI';  // contraseña de correo SMTP
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587; // 465

  // Destinatarios
  $mail->setFrom('dfvargas@sofuva.com', 'Catheryn');
  $mail->addAddress($_POST['emailDestino']);

  // Contenido del correo
  $mail->isHTML(true);
  $mail->Subject = 'Nuevo mensaje del formulario web';
  $mail->Body    = 'Nombre: ' . $_POST['user_name'] . '<br>Email: ' . $_POST['user_email'] . '<br>Mensaje: ' . $_POST['user_bio'];

  $mail->send();
  $_SESSION['message'] = 'Mensaje enviado correctamente';
} catch (Exception $e) {
  $_SESSION['message'] = "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}";
}

header('Location: index.php');
exit;

?>
