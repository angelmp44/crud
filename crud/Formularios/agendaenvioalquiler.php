<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />


    <title>Envíos de Alquiler</title>
</head>
<body>
<center>
		<br>
		<br>
		<br>
		<h1>Agenda de Envíos Alquiler</h1>
		<br>
		<form  action="buscarenvioalquiler.php" method="get">
		<input style="width :50%" name="buscador" class="form-control">
			<br>
			<br>
			<input type=submit value="Buscar" class="btn btn-outline-primary">
		<a href="../Formularios/mostrarenvioalquiler.php" class="btn btn-outline-success">Mostrar Todos Los Envíos</a>
		<a href="../Formularios/frm_envios_alquiler.php" class="btn btn-outline-danger">Ingresar Envío Nuevo</a>
		<a href="../pag_administrador/admin.html" class="btn btn-outline-warning">Regresar</a>
		</form>
	</center>
</body>
</html>