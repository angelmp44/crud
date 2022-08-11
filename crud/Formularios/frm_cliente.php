<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    
    

    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Registro Cliente | H&D Construequipos</title>
   
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

    
    <form action="registroCliente.php" method="post" class="formulario">  

        
            <P><legend class="subtitulo">Registrar Cliente</legend></P> 
            <br>

            <div>
                <label class="etiqueta">Documento del Cliente</label>
                <input class="controls" type="number" name="doc_cliente" placeholder="Ingresa el documento del cliente">
            </div>

            <div>
                <label class="etiqueta">Nombre</label>
                <input class="controls" type="text" name="nombre_cliente" placeholder="Ingresa el nombre del cliente">
            </div> 

            <div>
                <label class="etiqueta">Apellido</label>
                <input class="controls" type="text" name="apellido_cliente" placeholder="Ingresa el apellido del cliente">
            </div> 

            <div>
                <label class="etiqueta">Teléfono</label>
                <input class="controls" type="tel" name="tel_cliente" placeholder="Ingresa el teléfono del cliente">
            </div> 

            <div>
                <label class="etiqueta">Email</label>
                <input class="controls" type="email" name="correo_cliente" placeholder="Ingresa el correo electrónico del cliente">
            </div> 

            <div>
                <label class="etiqueta">Dirección</label>
                <input class="controls" type="text" name="direccion_cliente" placeholder="Ingresa la dirección del cliente">
            </div> 
            <br>

            <div>
                <center><input class="btn btn-danger" type="submit" name="enviar"value="Registrar Cliente" /></center> 
            </div>
            <br>
            <div>
                <center><a class="btn btn-danger" href="agendaclientes.php">Regresar</a></center>
            </div> 

        
    </form> 
    
</body>
<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>