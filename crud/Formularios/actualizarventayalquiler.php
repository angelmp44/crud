<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_venta'])) {
		$id_venta =$_GET['id_venta'];
		$fecha=$_POST['fecha'];
		$doc_cliente=$_POST['doc_cliente'];
		$doc_admin=$_POST['doc_admin'];
        $id_producto=$_POST['id_producto'];
        $cant_producto_venta_y_alquiler=$_POST['cant_producto_venta_y_alquiler'];
        $valor_venta=$_POST['valor_venta'];
        $valor_alquiler=$_POST['valor_alquiler']; 

	$sql ="UPDATE `venta_y_alquiler` SET 
			`fecha` = '$fecha', 
			`doc_cliente` = '$doc_cliente', 
			`doc_admin` = '$doc_admin', 
            `id_producto` = '$id_producto',
            `cant_producto_venta_y_alquiler` = '$cant_producto_venta_y_alquiler', 
            `valor_venta` = '$valor_venta', 
            `valor_alquiler` = '$valor_alquiler' 

			 
			WHERE `venta_y_alquiler`.`id_venta` = $id_venta";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "1 fila actualizada";
			}else{
				echo mysqli_error($conexion);
			}
	}
	header('location: mostrarventayalquiler.php')
?>