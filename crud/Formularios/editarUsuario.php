
 <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Actualizar Usuario| H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">

<!---------------------- Header-------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php require "../partes/header.html" ?>
</head>
<!---------------------- Header-------------------------->



<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_usuario = $_GET['id_usuario'];

	$sql="SELECT * FROM `usuario` WHERE id_usuario=$id_usuario";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 
<body>
	  	

<form action="<?='actualizarUsuario.php?id_usuario='.($fila["id_usuario"])?>" method="post" class="formulario"> 

                
<P><legend class="subtitulo">Actualizar Datos</legend></P> 
<br>
<div>
    <label class="etiqueta">Nombre</label>
    <input class="controls" type="text" name="nombre_usuario" placeholder="Ingresa tu nombre">
</div> 
<div>
    <label class="etiqueta">Crea una contraseña</label>
    <input class="controls" type="password" name="contraseña_usuario" placeholder="Contraseña">
</div>
<div>
    <label class="etiqueta">Correo</label>
    <input class="controls" type="email" name="correo_usuario" placeholder="Ingresa tu correo electrónico">
</div>
<div>
<center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /> </center>
</div>
<br>
<div>
<center><a class="btn btn-danger" href="./agendaUsuario.php">Volver</a></center>
</div> 


</form> 
   
<?php
	}
?>

</body>
<!-- Footer-->
<?php require "../partes/footerpp.html" ?>
<!-- Footer-->
</html>