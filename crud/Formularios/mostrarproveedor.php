<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Lista de proveedores </h1>
		<a href="frm_proveedor.php" class="btn btn-outline-danger">Ingresar Proveedor Nuevo</a>
		<a href="agendaproveedor.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-info">Página administrador</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Dirección</th>
                    <th>Acciones</th>
				</tr>
			</thead>
	<?php
		$sql="SELECT * FROM `proveedor`";
		$result=mysqli_query($conexion,$sql);

	while ($fila=mysqli_fetch_array($result)) {
	?>	
	  <tr>
		<td> <?php echo $fila['id_proveedor'] ?> </td>
		<td> <?php echo $fila['nombre_proveedor'] ?> </td>
		<td> <?php echo $fila['telefono_proveedor'] ?> </td>
		<td> <?php echo $fila['correo_proveedor'] ?> </td>
        <td> <?php echo $fila['direccion_proveedor'] ?> </td>
		<td>
		<a href="<?='eliminarproveedor.php?id_proveedor='.($fila["id_proveedor"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarproveedor.php?id_proveedor='.($fila["id_proveedor"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>