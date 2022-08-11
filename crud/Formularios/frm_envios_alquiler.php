<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Envios Alquiler | H&D Construequipos</title>
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

    <form action="registroEnvioAlquiler.php" method="post" class="formulario"> 

        
            <P><legend class="subtitulo">Registrar Alquiler</legend></P>
            <br>
            <div>
                <label class="etiqueta">Documento Cliente</label>
                <input class="controls" type="text" name="doc_cliente" placeholder="Ingresa el documento del cliente">
            </div>

            <div>
                <label class="etiqueta">Documento Asesor</label>
                <input class="controls" type="text" name="doc_admin" placeholder="Ingresa tu documento de identidad">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto">
            </div>
            
            <div>   
                <label class="etiqueta">Fecha de alquiler</label>
                <input class="controls" type="date" name="fecha_inicio" placeholder="Ingresa la fecha de hoy">
            </div> 
            
            <div>   
                <label class="etiqueta">Fecha de devolución</label>
                <input class="controls" type="date" name="fecha_fin" placeholder="Ingresa la fecha de devolución">
            </div> 

            <div>   
                <label class="etiqueta">Dirección de envío</label>
                <input class="controls" type="text" name="direccion_envio" placeholder="Ingresa la dirección de envío">
            </div> 
            <br>
            <div>
                <input class="botons" type="submit" name="enviar"value="VALIDAR" /> 
            </div>
            
            <div>
                <center><a class="botons" href="agendaenvioalquiler.php">Regresar</a></center>
            </div> 

       
    </form> 

</body>

<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->

</html>
