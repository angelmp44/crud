<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_inicio_sesion.css">
    <title>Iniciar Sesión | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
</head>

<body>
    <section class="titulo">
        <h1>H&D Construequipos</h1>
 
    </section>
    <form  method="post" action="../Formularios/validar_login_administrador.php" class="form-register"> 
        <h1>Iniciar Sesión</h1>

        <input class="controls" type="text" name="usuario" placeholder="Usuario">     
        <input class="controls" type="password" name="contraseña" placeholder="Contraseña">   

        <p><a href="#">Recuperar contraseña</a></p>        
        <p><a href="../Formularios/frm_registro_administrador.php">Registrarse</a></p>

        <input class="botons" type="submit" name="" value="INICIAR SESION">
        <p><a href="../pag_principal/principal.php">Volver</a></p>
    </form>  

</body>
</html> 

<!-- cuando se oprime el boton enviar se debe comprobar que exista un registro en la tabla administrador
en la base de datos con la informacion de usuario y contraseña ingresada para permitir el inicio de sesion -->