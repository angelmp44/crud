<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->


<!-- navbar-->
<?php require "../partes/navbarenvioventa.html" ?> 
<!-- navbar-->
<center>
		<br>
		<h1> Envíos por ventas </h1>
		
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Documento Cliente</th>
					<th>Documento Asesor</th>
					<th>Código del Producto</th>
					<th>Fecha de Envío</th>
                    <th>Dirección de Envío</th>
                    <th>Acciones</th>
				</tr>
			</thead>
	<?php
		$sql="SELECT * FROM `envíos_venta`";
		$result=mysqli_query($conexion,$sql);

	while ($fila=mysqli_fetch_array($result)) {
	?>	
	  <tr>
		<td> <?php echo $fila['id_envio_venta'] ?> </td>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['doc_admin'] ?> </td>
		<td> <?php echo $fila['id_producto'] ?> </td>
        <td> <?php echo $fila['fecha_entrega'] ?> </td>
        <td> <?php echo $fila['direccion_envio'] ?> </td>
		<td>
		<a href="<?='eliminarenvioventa.php?id_envio_venta='.($fila["id_envio_venta"]) ?>". > ❌Borrar</a>
		<a href="<?='editarenvioventa.php?id_envio_venta='.($fila["id_envio_venta"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>