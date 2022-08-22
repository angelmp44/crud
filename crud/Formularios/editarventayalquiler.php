<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
<title>Venta y Alquiler | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_venta = $_GET['id_venta'];

	$sql="SELECT * FROM `venta_y_alquiler` where id_venta=$id_venta";

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

<form action="<?='actualizarventayalquiler.php?id_venta='.($fila["id_venta"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Venta o Alquiler</legend></P> 
<br>
<div>
                <label class="etiqueta">id de la venta</label>
                <input class="controls" type="number" name="id_venta" placeholder="Ingresa el id" value="<?php echo $fila['id_venta'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Fecha</label>
                <input class="controls" type="date" name="fecha" placeholder="Ingresa la fecha de hoy" value="<?php echo $fila['fecha'] ?>">
            </div> 
            
            <div>
                <label class="etiqueta">Documento Cliente</label>
                <input class="controls" type="number" name="doc_cliente" placeholder="Ingresa el documento del cliente" value="<?php echo $fila['doc_cliente'] ?>">
            </div>

            <div>
                <label class="etiqueta">Documento Asesor</label>
                <input class="controls" type="number" name="doc_admin" placeholder="Ingresa tu documento de identidad" value="<?php echo $fila['doc_admin'] ?>">
            </div>
            
            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto" value="<?php echo $fila['id_producto'] ?>">
            </div>

            <div>

                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto_venta_y_alquiler" placeholder="Ingresa la cantidad del producto" value="<?php echo $fila['cant_producto_venta_y_alquiler'] ?>">
            </div>
            
            <div>
                <label class="etiqueta">Valor total de la venta</label>
                <input class="controls" type="text" name="valor_venta" placeholder="Valor de la transacción" value="<?php echo $fila['valor_venta'] ?>">
            </div>

            <div>
                <label class="etiqueta">Valor total del alquiler</label>
                <input class="controls" type="text" name="valor_alquiler" placeholder="Valor de la transacción" value="<?php echo $fila['valor_alquiler'] ?>">
            </div>


            <div>
                <center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /></center> 
            </div>
            <br>
            <div>
                <center><a class="btn btn-danger" href="agendaventayalquiler.php">Regresar</a></center>
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