<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



    <title>Envíos Ventas</title>
</head>
<body>

<!-- menu-->
<?php require "../partes/navbaragendas.html" ?> 
<!-- menu-->

<center>
		<br>
		<br>
		<br>
		<h1>Gestión de Envíos por ventas</h1>
		<br>
		<form  action="buscarenvioventa.php" method="get">
		<input style="width :50%" name="buscador" placeholder = "Buscar por doc del cliente o administrador" class="form-control">
			<br>
			<br>
			<input type=submit value="Buscar" class="btn btn-outline-danger">
		<a href="../Formularios/mostrarenvioventa.php" class="btn btn-outline-danger">Mostrar Todos Los Envíos</a>
		<a href="../Formularios/frm_envios_venta.php" class="btn btn-outline-danger">Ingresar Envío Nuevo</a>
		
		</form>
	</center>
</body>
<?php require "../partes/footer.html" ?>

</html>