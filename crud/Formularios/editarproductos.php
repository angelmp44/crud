<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
<title>Registro Producto | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_producto = $_GET['id_producto'];

	$sql="SELECT * FROM `producto` where id_producto=$id_producto";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 
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
	 

<form action="<?='actualizarproductos.php?id_producto='.($fila["id_producto"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Producto</legend></P> 
<br>
<div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="number" name="id_producto" placeholder="Ingresa el id del producto" value="<?php echo $fila['id_producto'] ?>" >
            </div>

            <div>
                <label class="etiqueta">Código del proveedor</label>
                <input class="controls" type="text" name="id_proveedor" placeholder="Ingresa el código del proveedor" value="<?php echo $fila['id_proveedor'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Nombre del producto</label>
                <input class="controls" type="text" name="nombre_producto" placeholder="Ingresa el nombre del producto" value="<?php echo $fila['nombre_producto'] ?>">
            </div>
            <div>
                <label class="etiqueta">Tipo del producto </label>

                <select class= "tipo_producto" name="tipo_producto" value="<?php echo $fila['tipo_producto'] ?>">

                    <option>Alquiler</option>
                    <option>Venta</option>
                    <option selected = "selected">Seleccionar</option>
                              
                </select>

                <br>
                <br>

            </div>
            <div>
                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto" placeholder="Ingresa la cantidad del producto" value="<?php echo $fila['cant_producto'] ?>" >
            </div>

            <div>
                <label class="etiqueta">Precio de venta</label>
                <input class="controls" type="text" name="precio_venta" placeholder="Ingresa el precio de venta del producto" value="<?php echo $fila['precio_venta'] ?>">
            </div>

            <div>
                <label class="etiqueta">Precio de alquiler</label>
                <input class="controls" type="text" name="precio_alquiler_dia" placeholder="Ingresa el precio de alquiler por día del producto" value="<?php echo $fila['precio_alquiler_dia'] ?>" >
            </div>

            <div>
                <center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /></center> 
            </div>
            <br>
            <div>
                <center><a class="btn btn-danger" href="agendaproductos.php">Regresar</a></center>
            </div> 
 
    </form> 
    
<?php
	}
?>


</body>
<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>