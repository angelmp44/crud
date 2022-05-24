
<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_cliente.css">
    <title>Registro Cliente | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$doc_cliente = $_GET['doc_cliente'];

	$sql="SELECT * FROM `cliente` where doc_cliente=$doc_cliente";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 

	 

<form action="<?='actualizarcliente.php?doc_cliente='.($fila["doc_cliente"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Registrar Cliente</legend></P> 

<div>
                <label class="etiqueta">Documento del Cliente</label>
                <input class="controls" type="number" name="doc_cliente" placeholder="Ingresa el documento del cliente" value="<?php echo $fila['doc_cliente'] ?>" >
            </div>

            <div>
                <label class="etiqueta">Nombre</label>
                <input class="controls" type="text" name="nombre_cliente" placeholder="Ingresa el nombre del cliente" value="<?php echo $fila['nombre_cliente'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Apellido</label>
                <input class="controls" type="text" name="apellido_cliente" placeholder="Ingresa el apellido del cliente" value="<?php echo $fila['apellido_cliente'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Teléfono</label>
                <input class="controls" type="tel" name="tel_cliente" placeholder="Ingresa el teléfono del cliente" value="<?php echo $fila['tel_cliente'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Email</label>
                <input class="controls" type="email" name="correo_cliente" placeholder="Ingresa el correo electrónico del cliente" value="<?php echo $fila['correo_cliente'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Dirección</label>
                <input class="controls" type="text" name="direccion_cliente" placeholder="Ingresa la dirección del cliente" value="<?php echo $fila['direccion_cliente'] ?>">
            </div> 

            <div>
                <input class="botons" type="submit" value="Actualizar" /> 
            </div>
            <br>
            <br> 
            <div>
                <center><a class="botons" href="mostrarcliente.php">Regresar</a></center>
            </div> 
 
    </form> 
    <img src="../CSS/img/Logo.png" style="width: 150px">
<?php
	}
?>
