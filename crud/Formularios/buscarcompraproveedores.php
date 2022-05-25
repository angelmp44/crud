<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

<center>
		<br>
		<h1> Listado de compras a proveedores </h1>
		<a href="frm_compra_proveedores.php" class="btn btn-outline-danger">Ingresar Compra Nueva</a>
		<a href="agendacompraproveedor.php" class="btn btn-outline-warning">Regresar</a>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>id compra</th>
					<th>id del proveedor</th>
					<th>id  del producto</th>
					<th>Cantidad del producto</th>
					<th>Valor de la compra</th>
                    <th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `compra_proveedores` WHERE `id_proveedor` 
            LIKE '%$buscador%' OR `id_producto` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
		<td> <?php echo $fila['id_compra'] ?> </td>
		<td> <?php echo $fila['id_proveedor'] ?> </td>
		<td> <?php echo $fila['id_producto'] ?> </td>
		<td> <?php echo $fila['cant_producto_compra'] ?> </td>
        <td> <?php echo $fila['valor_compra'] ?> </td>
		<td>
		<a href="<?='eliminarcompraproveedores.php?id_compra='.($fila["id_compra"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarcompraproveedores.php?id_compra='.($fila["id_compra"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>