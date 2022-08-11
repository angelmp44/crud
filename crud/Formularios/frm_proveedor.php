<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
   

    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">

<!---------------------- Header-------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->
<!-- menu-->
<?php require "../partes/navbaragendas.html" ?> 
<!-- menu-->
</head>
<body>

    <form action="../Formularios/registroProveedor.php" method="post" class="formulario"> 

     
            <legend class="subtitulo">Registro de Proveedor</legend> 

            <div>
                <label class="etiqueta">Nombre</label>
                <input class="controls" type="text" name="nombre_proveedor" placeholder="Ingresa el nombre del proveedor">
            </div> 

            <div>
                <label class="etiqueta">Teléfono</label>
                <input class="controls" type="tel" name="telefono_proveedor" placeholder="Ingresa el teléfono del proveedor">
            </div> 

            <div>
                <label class="etiqueta">Email</label>
                <input class="controls" type="email" name="correo_proveedor" placeholder="Ingresa el correo electrónico del proveedor">
            </div> 

            <div>
                <label class="etiqueta">Dirección</label>
                <input class="controls" type="text" name="direccion_proveedor" placeholder="Ingresa la dirección del proveedor">
            </div> 

            <div>
                <input class="botons" type="submit" name="enviar"value="Registrar Proveedor" /> 
            </div>
            
            <div>
                <center><a class="botons" href="agendaproveedor.php">Regresar</a></center>
            </div> 

    </form> 

</body>
<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>