<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
<title>Registro Compra Proveedores| H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_compra = $_GET['id_compra'];

	$sql="SELECT * FROM `compra_proveedores` where id_compra=$id_compra";

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

<form action="<?='actualizarcompraproveedores.php?id_compra='.($fila["id_compra"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Compra </legend></P> 
<br>
<div>
                <label class="etiqueta">id de la compra</label>
                <input class="controls" type="number" name="id_compra" placeholder="Ingresa el id de la compra" value="<?php echo $fila['id_compra'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Código del proveedor</label>
                <input class="controls" type="text" name="id_proveedor" placeholder="Ingresa el código del proveedor" value="<?php echo $fila['id_proveedor'] ?>">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto" value="<?php echo $fila['id_producto'] ?>">
            </div>

            <div>
                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto_compra" placeholder="Ingresa la cantidad del producto" value="<?php echo $fila['cant_producto_compra'] ?>">
            </div>

            <div>
                <label class="etiqueta">Valor de la compra</label>
                <input class="controls" type="text" name="valor_compra" placeholder="Valor de la compra" value="<?php echo $fila['valor_compra'] ?>">
            </div>
          


            <div>
                <center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /></center> 
            </div>
            <br>
            <div>
                <center><a class="btn btn-danger" href="agendacompraproveedor.php">Regresar</a></center>
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