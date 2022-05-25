<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Listado de productos </h1>
		<a href="frm_producto.php" class="btn btn-outline-danger">Ingresar Producto Nuevo</a>
		<a href="agendaproductos.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-info">Página administrador</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>id del producto</th>
					<th>Código del proveedor</th>
					<th>Nombre del producto</th>
					<th>Tipo del producto</th>
					<th>Cantidad del producto</th>
					<th>Precio de venta</th>
                    <th>Precio de alquiler</th>
                    <th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `producto` WHERE `nombre_producto` 
            LIKE '%$buscador%' OR `tipo_producto` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
		<td> <?php echo $fila['id_producto'] ?> </td>
		<td> <?php echo $fila['id_proveedor'] ?> </td>
		<td> <?php echo $fila['nombre_producto'] ?> </td>
		<td> <?php echo $fila['tipo_producto'] ?> </td>
        <td> <?php echo $fila['cant_producto'] ?> </td>
        <td> <?php echo $fila['precio_venta'] ?> </td>
        <td> <?php echo $fila['precio_alquiler_dia'] ?> </td>
		<td>
		<a href="<?='eliminarproductos.php?id_producto='.($fila["id_producto"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarproductos.php?id_producto='.($fila["id_producto"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>