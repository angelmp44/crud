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
<?php require "../partes/navbarenvioalquiler.html" ?> 
<!-- navbar--> 

<center>
		<br>
		<h1> Lista de Envíos por Alquiler </h1>
		
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Documento Cliente</th>
					<th>Documento Asesor</th>
					<th>Código Producto</th>
					<th>Fecha de Alquiler</th>
                    <th>Fecha de Devolución</th>
                    <th>Dirección de Envío</th>
                    <th>Acciones</th>
				</tr>
			</thead>
	<?php
		$sql="SELECT * FROM `envíos_alquiler`";
		$result=mysqli_query($conexion,$sql);

	while ($fila=mysqli_fetch_array($result)) {
	?>	
	  <tr>
		<td> <?php echo $fila['id_envio_alquiler'] ?> </td>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['doc_admin'] ?> </td>
		<td> <?php echo $fila['id_producto'] ?> </td>
        <td> <?php echo $fila['fecha_inicio'] ?> </td>
        <td> <?php echo $fila['fecha_fin'] ?> </td>
        <td> <?php echo $fila['direccion_envio'] ?> </td>
		<td>
		<a href="<?='eliminarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"]) ?>". > ❌Borrar</a>
		<a href="<?='editarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>