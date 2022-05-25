<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Lista de envíos por ventas </h1>
		<a href="frm_envios_venta.php" class="btn btn-outline-danger">Ingresar Envío Nuevo</a>
		<a href="agendaenvioventa.php" class="btn btn-outline-warning">Regresar</a>
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
					<th>Código del Producto</th>
					<th>Fecha de Envío</th>
                    <th>Dirección de Envío</th>
                    <th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `envíos_venta` WHERE `doc_cliente` 
            LIKE '%$buscador%' OR `doc_admin` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
		<td> <?php echo $fila['id_envio_venta'] ?> </td>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['doc_admin'] ?> </td>
		<td> <?php echo $fila['id_producto'] ?> </td>
        <td> <?php echo $fila['fecha_entrega'] ?> </td>
        <td> <?php echo $fila['direccion_envio'] ?> </td>
		<td>
		<a href="<?='eliminarenvioventa.php?id_envio_venta='.($fila["id_envio_venta"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarenvioventa.php?id_envio_venta='.($fila["id_envio_venta"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>