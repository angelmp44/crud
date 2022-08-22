<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
<title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_envio_venta = $_GET['id_envio_venta'];

	$sql="SELECT * FROM `envíos_venta` where id_envio_venta=$id_envio_venta";

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

<form action="<?='actualizarenvioventa.php?id_envio_venta='.($fila["id_envio_venta"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Registrar Envío</legend></P> 
<br>
<div>
                <label class="etiqueta">id del envío</label>
                <input class="controls" type="number" name="id_envio_venta" placeholder="Ingresa el id del envío" value="<?php echo $fila['id_envio_venta'] ?>" >
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
                <label class="etiqueta">Fecha de envío</label>
                <input class="controls" type="date" name="fecha_entrega" placeholder="Ingresa la fecha de entrega" value="<?php echo $fila['fecha_entrega'] ?>">
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
                <center><a class="btn btn-danger" href="agendaenvioventa.php">Regresar</a></center>
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

     

