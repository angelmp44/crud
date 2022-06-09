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
		<h1> Compras a proveedores </h1>
		<a href="../Formularios/agendacompraproveedor.php" class="btn btn-light" >Volver</a>
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
		<a href="<?='eliminarcompraproveedores.php?id_compra='.($fila["id_compra"]) ?>". > ❌Borrar</a>
		<a href="<?='editarcompraproveedores.php?id_compra='.($fila["id_compra"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>