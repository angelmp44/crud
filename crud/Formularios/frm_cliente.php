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
   

</head>
<body>
    
    <form action="registroCliente.php" method="post" class="formulario">  

        
            <P><legend class="subtitulo">Registrar Cliente</legend></P> 

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

            <div>
                <input class="botons" type="submit" name="enviar"value="Registrar Cliente" /> 
            </div>
            <br>
            <br>
            <div>
                <center><a class="botons" href="agendaclientes.php">Regresar</a></center>
            </div> 

        
    </form> 
    <img src="../CSS/img/Logo.png" style="width: 150px">
</body>
</html>