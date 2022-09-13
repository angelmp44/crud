<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title >Perfil</title>

<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->

</head>
<body> 

<!--contenido principal-->
<center>
		<br>
		
		<h1>Ingresa tu correo registrado</h1>
		<br>
		<form  action="buscarUsuario.php" method="get">
		<input style="width :30%" name="buscador" placeholder="Buscar" class="form-control">
			<br>
		
			<input type=submit value="Buscar"  class="btn btn-outline-danger">
		<a href="../pag_cliente/cliente.php" class="btn btn-outline-danger">Volver</a>
		</form>
	</center>

<!--fin-->
	
</body>

<?php require "../partes/footerpp.html" ?>
</html>