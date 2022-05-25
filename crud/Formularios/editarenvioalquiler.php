<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_envios_alquiler.css">
<title>Registro Proveedor | H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_envio_alquiler = $_GET['id_envio_alquiler'];

	$sql="SELECT * FROM `envíos_alquiler` where id_envio_alquiler=$id_envio_alquiler";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 

	 

<form action="<?='actualizarenvioalquiler.php?id_envio_alquiler='.($fila["id_envio_alquiler"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Envío de Alquiler</legend></P> 

<div>
                <label class="etiqueta">Id del Envío</label>
                <input class="controls" type="number" name="id_envio_alquiler" placeholder="Ingresa el id del envío" value="<?php echo $fila['id_envio_alquiler'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Documento Cliente</label>
                <input class="controls" type="text" name="doc_cliente" placeholder="Ingresa el documento del cliente" value="<?php echo $fila['doc_cliente'] ?>">
            </div>

            <div>
                <label class="etiqueta">Documento Asesor</label>
                <input class="controls" type="text" name="doc_admin" placeholder="Ingresa tu documento de identidad" value="<?php echo $fila['doc_admin'] ?>">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto" value="<?php echo $fila['id_producto'] ?>">
            </div>
            
            <div>   
                <label class="etiqueta">Fecha de alquiler</label>
                <input class="controls" type="date" name="fecha_inicio" placeholder="Ingresa la fecha de hoy" value="<?php echo $fila['fecha_inicio'] ?>">
            </div> 
            
            <div>   
                <label class="etiqueta">Fecha de devolución</label>
                <input class="controls" type="date" name="fecha_fin" placeholder="Ingresa la fecha de devolución" value="<?php echo $fila['fecha_fin'] ?>">
            </div> 

            <div>   
                <label class="etiqueta">Dirección de envío</label>
                <input class="controls" type="text" name="direccion_envio" placeholder="Ingresa la dirección de envío" value="<?php echo $fila['direccion_envio'] ?>">
            </div> 

            <div>
                <input class="botons" type="submit" name="enviar"value="VALIDAR" /> 
            </div>
            <br>
            <br>
            <div>
                <center><a class="botons" href="agendaenvioalquiler.php">Regresar</a></center>
            </div> 
 
    </form> 
    <img src="../CSS/img/Logo.png" style="width: 150px">
<?php
	}
?>
