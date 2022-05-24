<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_proveedor.css">
<title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_proveedor = $_GET['id_proveedor'];

	$sql="SELECT * FROM `proveedor` where id_proveedor=$id_proveedor";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 

	 

<form action="<?='actualizarproveedor.php?id_proveedor='.($fila["id_proveedor"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Registrar Proveedor</legend></P> 

<div>
                <label class="etiqueta">id del proveedor</label>
                <input class="controls" type="number" name="doc_cliente" placeholder="Ingresa el documento del proveedor" value="<?php echo $fila['id_proveedor'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Nombre</label>
                <input class="controls" type="text" name="nombre_proveedor" placeholder="Ingresa el nombre del proveedor" value="<?php echo $fila['nombre_proveedor'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Teléfono</label>
                <input class="controls" type="tel" name="telefono_proveedor" placeholder="Ingresa el teléfono del proveedor" value="<?php echo $fila['telefono_proveedor'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Email</label>
                <input class="controls" type="email" name="correo_proveedor" placeholder="Ingresa el correo electrónico del proveedor" value="<?php echo $fila['correo_proveedor'] ?>">
            </div> 

            <div>
                <label class="etiqueta">Dirección</label>
                <input class="controls" type="text" name="direccion_proveedor" placeholder="Ingresa la dirección del proveedor" value="<?php echo $fila['direccion_proveedor'] ?>">
            </div> 

            <div>
                <input class="botons" type="submit" value="Actualizar" /> 
            </div>
            <br>
            <br> 
            <div>
                <center><a class="botons" href="agendaproveedor.php">Regresar</a></center>
            </div> 
 
    </form> 
    <img src="../CSS/img/Logo.png" style="width: 150px">
<?php
	}
?>
