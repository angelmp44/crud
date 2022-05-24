<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_proveedor.css">
    <title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">


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
            <br>
            <br>
            <div>
                <center><a class="botons" href="agendaproveedor.php">Regresar</a></center>
            </div> 

    </form> 

    <img src="../CSS/img/Logo.png" style="width: 135px">

</body>
</html>