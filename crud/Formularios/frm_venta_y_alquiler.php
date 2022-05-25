<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_venta_y_alquiler.css">
    <title>Venta y Alquiler | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">

</head>
<body>
  

    <form action="../Formularios/registroVentaAlquiler.php" method="post" class="formulario"> 

   
            <legend class="subtitulo">Registrar Venta o Alquiler</legend> 
        
            <div>
                <label class="etiqueta">Fecha</label>
                <input class="controls" type="date" name="fecha" placeholder="Ingresa la fecha de hoy">
            </div> 
            
            <div>
                <label class="etiqueta">Documento Cliente</label>
                <input class="controls" type="number" name="doc_cliente" placeholder="Ingresa el documento del cliente">
            </div>

            <div>
                <label class="etiqueta">Documento Asesor</label>
                <input class="controls" type="number" name="doc_admin" placeholder="Ingresa tu documento de identidad">
            </div>
            
            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto">
            </div>

            <div>

                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto_venta_y_alquiler" placeholder="Ingresa la cantidad del producto">
            </div>
            
            <div>
                <label class="etiqueta">Valor total de la venta</label>
                <input class="controls" type="text" name="valor_venta" placeholder="Valor de la transacción">
            </div>

            <div>
                <label class="etiqueta">Valor total del alquiler</label>
                <input class="controls" type="text" name="valor_alquiler" placeholder="Valor de la transacción">
            </div>

            <div>
                <input class="botons" type="submit" name="enviar"value="Registrar" /> 
            </div>
            <br>
            <br>
            <div>
                <center><a class="botons" href="agendaventayalquiler.php">Regresar</a></center>
            </div> 

    </form> 
    
    <img src="../CSS/img/Logo.png" style="width: 130px">

</body>
</html>
