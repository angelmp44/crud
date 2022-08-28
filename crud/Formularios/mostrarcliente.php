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
<?php require "../partes/navbaragendas.html" ?> 
<!-- navbar-->


<center>
		<br>
		<h1 style="margin-bottom: 20px"> Lista de clientes </h1>
		<a href="../Formularios/agendaclientes.php" class="btn btn-light" >Volver</a>
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
		<a href="<?='eliminarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > ❌Borrar</a>
		<a href="<?='editarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>