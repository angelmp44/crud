<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_compra_proveedores.css">
    <title>Registro Compra Proveedores| H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">

</head>
<body>

    <form action="../Formularios/compraProveedor.php" method="post" class="formulario"> 

        
            <P><legend class="subtitulo">Registro de Compras</legend></P>

            <div>
                <label class="etiqueta">Código del proveedor</label>
                <input class="controls" type="text" name="id_proveedor" placeholder="Ingresa el código del proveedor">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto">
            </div>

            <div>
                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto_compra" placeholder="Ingresa la cantidad del producto">
            </div>

            <div>
                <label class="etiqueta">Valor de la compra</label>
                <input class="controls" type="text" name="valor_compra" placeholder="Valor de la compra">
            </div>

            <div>
                <input class="botons" type="submit" name="enviar"value="Registrar Compra" /> 
            </div>
            <br>
            <br>
            <div>
                <center><a class="botons" href="agendaclientes.php">Regresar</a></center>
            </div> 

        
    </form> 
   
</body>
</html>