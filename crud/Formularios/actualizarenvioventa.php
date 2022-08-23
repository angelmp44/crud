<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_envio_venta'])) {
		$id_envio_venta =$_GET['id_envio_venta'];
		$doc_cliente=$_POST['doc_cliente'];
		$doc_admin=$_POST['doc_admin'];
		$id_producto=$_POST['id_producto'];
        $fecha_entrega=$_POST['fecha_entrega'];
        $direccion_envio=$_POST['direccion_envio'];

	$sql ="UPDATE `envíos_venta` SET 
			`doc_cliente` = '$doc_cliente', 
			`doc_admin` = '$doc_admin', 
			`id_producto` = '$id_producto', 
            `fecha_entrega` = '$fecha_entrega',
            `direccion_envio` = '$direccion_envio'
			 
			WHERE `envíos_venta`.`id_envio_venta` = $id_envio_venta";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "<script>
				alert('Actualización Exitosa');
				window.location='./mostrarenvioventa.php'
			   </script>";
			}else{
				echo mysqli_error($conexion);
			}
	}
	
?>