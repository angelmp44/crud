<link rel="stylesheet" type="text/css" href="../CSS/styles_frm_compra_proveedores.css">
<title>Registro Compra Proveedores| H&D Construequipos</title>
    <link rel="shortcut icon" href="../CSS/img/Logo.png">
<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());
?>
	<?php
	$id_compra = $_GET['id_compra'];

	$sql="SELECT * FROM `compra_proveedores` where id_compra=$id_compra";

	$result =mysqli_query($conexion, $sql);
	while ($fila= mysqli_fetch_array($result)) {
	?>
	 

	 

<form action="<?='actualizarcompraproveedores.php?id_compra='.($fila["id_compra"])?>" method="post" class="formulario">
	
<P><legend class="subtitulo">Actualizar Compra Proveedores</legend></P> 

<div>
                <label class="etiqueta">id de la compra</label>
                <input class="controls" type="number" name="id_compra" placeholder="Ingresa el id de la compra" value="<?php echo $fila['id_compra'] ?>" >
            </div>


            <div>
                <label class="etiqueta">Código del proveedor</label>
                <input class="controls" type="text" name="id_proveedor" placeholder="Ingresa el código del proveedor" value="<?php echo $fila['id_proveedor'] ?>">
            </div>

            <div>
                <label class="etiqueta">Código del producto</label>
                <input class="controls" type="text" name="id_producto" placeholder="Ingresa el código del producto" value="<?php echo $fila['id_producto'] ?>">
            </div>

            <div>
                <label class="etiqueta">Cantidad del producto</label>
                <input class="controls" type="text" name="cant_producto_compra" placeholder="Ingresa la cantidad del producto" value="<?php echo $fila['cant_producto_compra'] ?>">
            </div>

            <div>
                <label class="etiqueta">Valor de la compra</label>
                <input class="controls" type="text" name="valor_compra" placeholder="Valor de la compra" value="<?php echo $fila['valor_compra'] ?>">
            </div>
            <div>
                <input class="botons" type="submit" value="Actualizar" /> 
            </div>
            <br>
            <br> 
            <div>
                <center><a class="botons" href="agendacompraproveedor.php">Regresar</a></center>
            </div> 
 
    </form> 
    <img src="../CSS/img/Logo.png" style="width: 150px">
<?php
	}
?>
