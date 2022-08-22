<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
<title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_envio_alquiler = $_GET['id_envio_alquiler'];

	$sql="SELECT * FROM `envíos_alquiler` where id_envio_alquiler=$id_envio_alquiler";

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
	 

<form action="<?='actualizarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Envío</legend></P> 
<br>
<div>
                <label class="etiqueta">Id del Envío</label>
                <input class="controls" type="number" name="id_envio_alquiler" placeholder="Ingresa el id del envío" value="<?php echo $fila['id_envio_alquiler'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Documento Cliente</label>
                <input class="controls" type="text" name="doc_cliente" placeholder="Ingresa el documento del cliente" value="<?php echo $fila['doc_cliente'] ?>">
            </div>

            <div>
                <label class="etiqueta">Documento Asesor</label>
                <input class="controls" type="text" name="doc_admin" placeholder="Ingresa tu documento de identidad" value="<?php echo $fila['doc_admin'] ?>">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto" value="<?php echo $fila['id_producto'] ?>">
            </div>
            
            <div>   
                <label class="etiqueta">Fecha de alquiler</label>
                <input class="controls" type="date" name="fecha_inicio" placeholder="Ingresa la fecha de hoy" value="<?php echo $fila['fecha_inicio'] ?>">
            </div> 
            
            <div>   
                <label class="etiqueta">Fecha de devolución</label>
                <input class="controls" type="date" name="fecha_fin" placeholder="Ingresa la fecha de devolución" value="<?php echo $fila['fecha_fin'] ?>">
            </div> 

            <div>   
                <label class="etiqueta">Dirección de envío</label>
                <input class="controls" type="text" name="direccion_envio" placeholder="Ingresa la dirección de envío" value="<?php echo $fila['direccion_envio'] ?>">
            </div> 

    


            <div>
                <center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /></center> 
            </div>
            <br>
            <div>
                <center><a class="btn btn-danger" href="agendaenvioalquiler.php">Regresar</a></center>
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