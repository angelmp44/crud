
 <link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_venta.css">
    <title>Actualizar Administrador | H&D Construequipos</title>
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
	$doc_admin = $_GET['doc_admin'];

	$sql="SELECT * FROM `administrador` WHERE doc_admin=$doc_admin";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 
<body>
	  	

<form action="<?='actualizarAdmin.php?doc_admin='.($fila["doc_admin"])?>" method="post" class="formulario"> 

                
<P><legend class="subtitulo">Actualizar Datos</legend></P> 
<br>
<div>
    <label class="etiqueta">Número de documento</label>
    <input class="controls" type="text" name="doc_admin" value="<?php echo $fila['doc_admin'] ?>" readonly>
</div>

<div>
    <label class="etiqueta">Nombre</label>
    <input class="controls" type="text" name="nombre_admin" value="<?php echo $fila['nombre_admin'] ?>">
</div> 

<div>
    <label class="etiqueta">Apellido</label>
    <input class="controls" type="text" name="apellido_admin" value="<?php echo $fila['apellido_admin'] ?>">
</div>

<div>
    <label class="etiqueta" >Cargo</label>

    <select class= "cargo" name="cargo_admin" default="<?php echo $fila['cargo_admin'] ?>">

        <option>Gerente</option>
        <option>Asesor</option>
        <option>Aux. contable</option>
        <option selected = "selected">Seleccionar</option>
                  
    </select>

</div>

<div>
    <label class="etiqueta">Email</label>
    <input class="controls" type="email" name="correo_admin" value="<?php echo $fila['correo_admin'] ?>">
</div> 

<div>
    <label class="etiqueta">Teléfono</label>
    <input class="controls" type="number" name="tel_admin" value="<?php echo $fila['tel_admin'] ?>">
</div> 


<div>
<center><input class="btn btn-danger" type="submit" name="enviar"value="Actualizar" /> </center>
</div>
<br>
<div>
<center><a class="btn btn-danger" href="./agendaAdmin.php">Volver</a></center>
</div> 


</form> 
   
<?php
	}
?>

</body>
<!-- Footer-->
<?php require "../partes/footer.html" ?>
<!-- Footer-->
</html>