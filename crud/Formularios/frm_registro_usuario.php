<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_registro_administrador.css">
    <title>Registro administrador | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png"> 


</head>
<body>

           <form method="post" action="../Formularios/registroUsuario.php" class="formulario"> 

                
                    <P><legend class="subtitulo">Registráte como cliente</legend></P> 
                    
                    <p>Ya tengo cuenta <a href="../Formularios/frm_inicio_sesion_usuario.php">Ingresar</a></p>

                    <div>
                        <label class="etiqueta">Nombre</label>
                        <input class="controls" type="text" name="nombre_usuario" placeholder="Ingresa tu nombre">
                    </div> 
                    <div>
                        <label class="etiqueta">Crea una contraseña</label>
                        <input class="controls" type="password" name="contraseña_usuario" placeholder="Contraseña">
                    </div>
                    <div>
                        <label class="etiqueta">Correo</label>
                        <input class="controls" type="email" name="correo_usuario" placeholder="Ingresa tu correo electrónico">
                    </div>

                    <div>
                        <input class="botons" type="submit" name="enviar"value="Registrarse" /> 
                    </div>

                    <br>
                    <br>

                    <div>
                <center><a class="botons" href="../pag_principal/principal.html">Volver</a></center>
            </div> 


                
        </form> 
        
</body>
</html>

<!-- cuando se oprime el boton enviar se crea un registro en la tabla usuarios
en la base de datos con la informacion ingresada -->