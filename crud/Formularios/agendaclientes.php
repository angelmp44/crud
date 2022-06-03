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

    <title >Clientes</title>
</head>
<body> 

<!-- menu-->
<?php require "../partes/navbaragendas.html" ?> 
<!-- menu-->

<!--contenido principal-->
<center>
		<br>
		<br>
		<br>
		<h1>Gestión de Clientes</h1>
		<br>
		<form  action="buscarcliente.php" method="get">
		<input style="width :50%" name="buscador" placeholder="Buscar por nombre o apellido" class="form-control">
			<br>
			<br>
			<input type=submit value="Buscar"  class="btn btn-outline-danger">
		<a href="../Formularios/mostrarcliente.php" class="btn btn-outline-danger">Mostrar Todos</a>
		<a href="../Formularios/frm_cliente.php" class="btn btn-outline-danger">Ingresar Nuevo</a>
		</form>
	</center>

<!--fin-->
	
</body>

<?php require "../partes/footer.html" ?>
</html>