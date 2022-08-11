<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
   
   

    <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Registro Producto | H&D Construequipos</title>
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

   
  
    <form action="../Formularios/registroProducto.php" method="post" class="formulario"> 

            
            <p><legend class="subtitulo">Registrar Producto</legend></p>
            <br>

            <div>
                <label class="etiqueta">Código del proveedor</label>
                <input class="controls" type="text" name="id_proveedor" placeholder="Ingresa el código del proveedor">
            </div>

            <div>
                <label class="etiqueta">Nombre del producto</label>
                <input class="controls" type="text" name="nombre_producto" placeholder="Ingresa el nombre del producto">
            </div>
            <div>
                <label class="etiqueta">Tipo del producto </label>
                

                <select class= "tipo_producto" name="tipo_producto">

                    <option>Alquiler</option>
                    
                    <option>Venta</option>
                              
                </select>
                <br>
                <br> 
            </div>
            <div>
                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto" placeholder="Ingresa la cantidad del producto">
            </div>

            <div>
                <label class="etiqueta">Precio de venta</label>
                <input class="controls" type="text" name="precio_venta" placeholder="Ingresa el precio de venta del producto">
            </div>

            <div>
                <label class="etiqueta">Precio de alquiler</label>
                <input class="controls" type="text" name="precio_alquiler_dia" placeholder="Ingresa el precio de alquiler por día del producto">
            </div>
            <br>
            <div>
            <center><input class="btn btn-danger" type="submit" name="enviar"value="Registrar producto" /> 
            </div> </center>
            <br>
            <div>
            <center><a class="btn btn-danger" href="agendaproductos.php">Regresar</a></center>
            </div> 

    </form> 

</body>
<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>
