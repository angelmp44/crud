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

<!---------------------- Header-------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->
</head>
<body>

           <form method="post" action="../Formularios/registroUsuario.php" class="formulario"> 

                
                    <P><legend class="subtitulo">Registráte como cliente</legend></P> 
                    
                    <p>Ya tengo cuenta <a class="btn btn-outline-danger" href="../Formularios/frm_inicio_sesion_usuario.php">Ingresar</a></p>

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
                    <center><input class="btn btn-danger" type="submit" name="enviar"value="Registrarse" /> </center>
                    </div>

                    <br>
                  <div>
                    <center><a class="btn btn-danger" href="../pag_principal/principal.php">Volver</a></center>
            </div> 


                
        </form> 
        
</body>
<!-- Footer-->
<?php require "../partes/footerpp.html" ?>
<!-- Footer-->
</html>

<!-- cuando se oprime el boton enviar se crea un registro en la tabla usuarios
en la base de datos con la informacion ingresada -->