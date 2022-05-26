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
<nav class="navbar navbar-expand-lg bg-light" >  
    <div class="container-fluid" style = "background-color:  rgb(223, 222, 222); padding : 10px">
      <a class="navbar-brand" href="#">H&D Construequipos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../Formularios/mostrarenvioventa.php">Mostrar todos</a></li>
              <li><a class="dropdown-item" href="../Formularios/frm_envios_venta.php">Ingresar nuevo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../pag_administrador/admin.html">Salir</a></li>
            </ul>
          </li>
        </ul>	
      </div>
    </div>
</nav>

<center>
		<br>
		<br>
		<br>
		<h1>Agenda de Envíos por ventas</h1>
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