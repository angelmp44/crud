<?php

// conectarse a la bd
require "../conexion.php";
$objConexion = conectarse();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// variable correo del formulario
$correo = $_POST["correo"];

// si el campo se dejo en blanco no hacer nada
if(empty($correo)){
    echo "<script>
    alert('Ingresa un correo electrónico');
    window.location='./passwordRecover.php'
  </script>";
}
else{
    // si el correo ingresado no esta registrado en la base de datos no hacer nada
    $sql = "SELECT * FROM usuario WHERE correo_usuario =  '$correo' ";
    $resultado = $objConexion->query($sql);   
    $cantidad_registros = mysqli_num_rows($resultado);  /* devuelve la cantidad de registros encontrados */

    /* si cantidad_registros = 1 entonces el usuario esta registrado y puede cambiar su contraseña*/
    if($cantidad_registros != 0 ) {
        
        // generar codigo unico
        $codigo = uniqid(true);
        // calcular fecha expiracion (20 minutos de duracion a partir de la solicitud)
        $fecha = new DateTime('now', new DateTimeZone('America/Bogota'));
        $fecha->modify('+20 minute');
        $fechaExpiracion = $fecha->format("Y-m-d H:i:s");  
         
        // registrar la solicitud en la bd
        $sql2 = "INSERT INTO  cambio_contraseña (codigo, correo, fecha_expiracion) 
                    VALUES ('$codigo', '$correo', '$fechaExpiracion')";

        $resultado = $objConexion->query($sql2);        
        if($resultado){
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'adiblanco2020@hotmail.com';                     //SMTP username
                $mail->Password   = 'gustavo123';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('adiblanco2020@hotmail.com', 'H&D Construequipos');
                $mail->addAddress($correo);     //Add a recipient
                //$mail->addAddress('ellen@example.com');               //Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');

                // creacion de link
                $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) 
                        . "/frm_cambiar_contraseña.php?codigo=$codigo";
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Restablecimiento de clave';
                $mail->Body    = "<h3> Has solicitado restablecer tu contraseña </h3>
                                  <h4> <a href = '$url'> Clic aquí para cambiar clave </a> </h4>
                                    codigo: $codigo, expirará: $fechaExpiracion";
                $mail->send();
                // confirmacion de envio
                echo "<script>
                    alert('Hemos enviado un link a tu correo electronico');
                    window.location='./passwordRecover.php'
                    </script>";
            } 
            catch (Exception $e) {
                // mensaje de error
                echo "<script>
                    alert('No se ha podido enviar el link por correo ');
                    window.location='./passwordRecover.php'
                    </script>";
            }
        }
    }
    else{
        // si no se encuentra el correo en la bd entonces no hacer nada
        echo "<script>
        alert('Este correo no pertenece a un usuario registrado');
        window.location='./passwordRecover.php'
            </script>";

    }
}



