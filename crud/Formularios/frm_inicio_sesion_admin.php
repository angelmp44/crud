<html>
<!---------------------- Header-------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->
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
        <br>       
        <p><a class="btn btn-outline-danger" href="../Formularios/frm_registro_administrador.php">Registrarse</a></p>
<br>
<center><input class="btn btn-danger" type="submit" name="" value="INICIAR SESION"></center>
<br>
        <p><a class="btn btn-outline-danger" href="../pag_principal/principal.php">Volver</a></p>
    </form>  

</body>
<!-- Footer-->
<?php require "../partes/footerpp.html" ?>
<!-- Footer-->
</html> 

<!-- cuando se oprime el boton enviar se debe comprobar que exista un registro en la tabla administrador
en la base de datos con la informacion de usuario y contraseña ingresada para permitir el inicio de sesion -->