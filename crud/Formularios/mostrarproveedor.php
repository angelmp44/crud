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
<?php require "../partes/navbarproveedor.html" ?> 
<!-- navbar-->

<center>
		<br>
		<h1> Lista de proveedores </h1>
		
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
		<a href="<?='eliminarproveedor.php?id_proveedor='.($fila["id_proveedor"]) ?>". > ❌Borrar</a>
		<a href="<?='editarproveedor.php?id_proveedor='.($fila["id_proveedor"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>