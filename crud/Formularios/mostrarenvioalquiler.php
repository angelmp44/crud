<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Lista de Envíos por Alquiler </h1>
		<a href="frm_envios_alquiler.php" class="btn btn-outline-danger">Ingresar Envío Nuevo</a>
		<a href="agendaenvioalquiler.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-info">Página administrador</a>
		<br>
		<br>
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
		<a href="<?='eliminarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>