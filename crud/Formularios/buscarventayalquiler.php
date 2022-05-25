<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> ventas y Alquileres </h1>
		<a href="frm_venta_y_alquiler.php" class="btn btn-outline-danger">Ingresar Nueva</a>
		<a href="agendaventayalquiler.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Fecha</th>
					<th>Documento Cliente</th>
					<th>Documento asesor</th>
					<th>Código del producto</th>
                    <th>Cantidad del producto</th>
                    <th>Valor total de la venta</th>
                    <th>Valor total del alquiler</th>
                    <th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `venta_y_alquiler` WHERE `doc_cliente` 
            LIKE '%$buscador%' OR `doc_admin` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
		<td> <?php echo $fila['id_venta'] ?> </td>
		<td> <?php echo $fila['fecha'] ?> </td>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['doc_admin'] ?> </td>
        <td> <?php echo $fila['id_producto'] ?> </td>
        <td> <?php echo $fila['cant_producto_venta_y_alquiler'] ?> </td>
        <td> <?php echo $fila['valor_venta'] ?> </td>
        <td> <?php echo $fila['valor_alquiler'] ?> </td>
		<td>
		<a href="<?='eliminarventayalquiler.php?id_venta='.($fila["id_venta"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarventayalquiler.php?id_venta='.($fila["id_venta"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>