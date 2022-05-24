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

           <form action="../Formularios/registroAdministrador.php" method="post" class="formulario"> 

                
                    <P><legend class="subtitulo">Registráte como administrador</legend></P> 
                    
                    <p>Ya tengo cuenta <a href="../Formularios/frm_inicio_sesion_admin.php">Ingresar</a></p>


                    <div>
                        <label class="etiqueta">Número de documento</label>
                        <input class="controls" type="text" name="doc_admin" placeholder="Ingresa tu documento de identidad">
                    </div>

                    <div>
                        <label class="etiqueta">Nombres</label>
                        <input class="controls" type="text" name="nombre_admin" placeholder="Ingresa tu nombre">
                    </div> 

                    <div>
                        <label class="etiqueta">Apellidos</label>
                        <input class="controls" type="text" name="apellido_admin" placeholder="Ingresa tu apellido">
                    </div>

                    <div>
                        <label class="etiqueta" >Cargo</label>
        
                        <select class= "cargo" name="cargo_admin">
        
                            <option>Gerente</option>
                            <option>Asesor</option>
                            <option>Aux. contable</option>
                                      
                        </select>
        
                    </div>

                    <div>
                        <label class="etiqueta">Email</label>
                        <input class="controls" type="email" name="correo_admin" placeholder="Ingresa tu correo electrónico">
                    </div> 

                    <div>
                        <label class="etiqueta">Teléfono</label>
                        <input class="controls" type="tel" name="tel_admin" placeholder="Ingresa tu telefono">
                    </div> 

                    <div>
                        <label class="etiqueta">Crea una contraseña</label>
                        <input class="controls" type="password" name="contraseña_admin" placeholder="Contraseña">
                    </div>

                
                    <div>
                        <input class="botons" type="submit" name="enviar"value="Registrarse" /> 
                    </div>

                
        </form> 
        
</body>
</html>

<!-- cuando se oprime el boton enviar se crea un registro en la tabla administrador
en la base de datos con la informacion ingresada -->