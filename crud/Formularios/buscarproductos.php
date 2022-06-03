<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- navbar-->
<?php require "../partes/navbarproductos.html" ?> 
<!-- navbar-->

<center>
		<br>
		<h1 style="margin-bottom: 50px;"> Productos encontrados </h1>
		
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
		<a href="<?='eliminarproductos.php?id_producto='.($fila["id_producto"]) ?>". > ❌Borrar</a>
		<a href="<?='editarproductos.php?id_producto='.($fila["id_producto"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>