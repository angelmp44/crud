<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


    <title>Productos</title>
</head>
<body>
<center>
		<br>
		<br>
		<br>
		<h1>Gestion de Productos</h1>
		<br>
		<form  action="buscarproductos.php" method="get">
		<input style="width :50%" name="buscador" class="form-control">
			<br>
			<br>
			<input type=submit value="Buscar" class="btn btn-outline-primary">
		<a href="../Formularios/mostrarproductos.php" class="btn btn-outline-success">Mostrar Todos Los Productos</a>
		<a href="../Formularios/frm_producto.php" class="btn btn-outline-danger">Ingresar Producto Nuevo</a>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-warning">Regresar</a>
		</form>
	</center>
</body>
</html>