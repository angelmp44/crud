<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
    

    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Registro Compra Proveedores| H&D Construequipos</title>
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

    <form action="../Formularios/compraProveedor.php" method="post" class="formulario"> 

        
            <P><legend class="subtitulo">Registro de Compras</legend></P>
            <br>
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
            <br>
            <div>
            <center><input class="btn btn-danger" type="submit" name="enviar"value="Registrar Compra" /> </center>
            </div>
           <br>
            <div>
            <center><a class="btn btn-danger" href="agendacompraproveedor.php">Regresar</a></center>
            </div> 

        
    </form> 
   
</body>

<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>