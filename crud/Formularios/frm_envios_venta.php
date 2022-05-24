<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Registro Envios | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">

</head>
<body> 

    <form action="../Formularios/registroEnvioVenta.php" method="post" class="formulario"> 

       
            <p><legend class="subtitulo" >Datos de Envío</legend></p>

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
                <label class="etiqueta">Fecha de envío</label>
                <input class="controls" type="date" name="fecha_entrega" placeholder="Ingresa la fecha de entrega">
            </div> 

            <div>   
                <label class="etiqueta">Dirección de envío</label>
                <input class="controls" type="text" name="direccion_envio" placeholder="Ingresa la dirección de envío">
            </div> 

            <div>
                <input class="botons" type="submit" name="enviar"value="Registrar" /> 
            </div>

    </form> 
   
</body>
</html>