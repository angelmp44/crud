<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$nombreCliente = $_POST['nombre'];
$apellidoCliente= $_POST['apellido'];
$telefonoCliente= $_POST['telefono'];
$tipoSolicitud= $_POST['solicitud'];
$mensaje= $_POST['mensaje'];

                
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // adiblanco simula el correo emisor
    $mail->Username   = 'adiblanco2020@hotmail.com';                     //SMTP username
    $mail->Password   = 'gustavo123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
    //Recipients
    // griverab@unal.edu.co es el correo receptor
    $mail->setFrom('adiblanco2020@hotmail.com', 'H&D Construequipos');
    $mail->addAddress('griverab@unal.edu.co');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de cliente';
    $mail->Body    = "<h3> Has recibido una solicitud de, $nombreCliente $apellidoCliente </h3>
                      <p> Teléfono cliente: $telefonoCliente </p>
                      <p> Tipo solicitud: $tipoSolicitud </p>
                      <p> mensaje: $mensaje </p>";
                        
    $mail->send();
    // confirmacion de envio
    echo "<script>
        alert('Hemos recibido tu solicitud, pronto estaremos en contacto contigo');
        window.location='../pag_cliente/cliente.php'
        </script>";
} 
catch (Exception $e) {
    // mensaje de error
    echo "<script>
        alert('No se ha podido procesar la solicitud');
        window.location='../pag_cliente/cliente.php'
        </script>";
}


?>
