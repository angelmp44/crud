<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Lista de clientes </h1>
		<a href="frm_cliente.php" class="btn btn-outline-danger">Ingresar Cliente Nuevo</a>
		<a href="agendaclientes.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-info">Página administrador</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>Documento del Cliente</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Dirección</th>
                    <th>Acciones</th>
				</tr>
			</thead>
	<?php
		$sql="SELECT * FROM `cliente`";
		$result=mysqli_query($conexion,$sql);

	while ($fila=mysqli_fetch_array($result)) {
	?>	
	  <tr>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['nombre_cliente'] ?> </td>
		<td> <?php echo $fila['apellido_cliente'] ?> </td>
		<td> <?php echo $fila['tel_cliente'] ?> </td>
		<td> <?php echo $fila['correo_cliente'] ?> </td>
        <td> <?php echo $fila['direccion_cliente'] ?> </td>
		<td>
		<a href="<?='eliminarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>