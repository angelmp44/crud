<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



<title>Venta Y Alquiler</title>

<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->

</head>

<!-- menu-->
<?php require "../partes/navbaragendas.html" ?> 
<!-- menu-->

<body>

<center>
		<br>
		<br>
		<br>
		<h1>Gestión de Ventas y Alquileres</h1>
		<br>
		<form  action="buscarventayalquiler.php" method="get">
		<input style="width :50%" name="buscador" 
		placeholder="Buscar fecha (aaaa-mm-dd)" class="form-control">
			<br>
			<br>
			<input type=submit value="Buscar" class="btn btn-outline-danger">
		<a href="../Formularios/mostrarventayalquiler.php" class="btn btn-outline-danger">Mostrar Todos</a>
		<a href="../Formularios/frm_venta_y_alquiler.php" class="btn btn-outline-danger">Ingresar nuevo</a>
		
		</form>
	</center>
</body>

<?php require "../partes/footer.html" ?>
</html>