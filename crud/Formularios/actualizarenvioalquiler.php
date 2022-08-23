<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_envio_alquiler'])) {
		$id_envio_alquiler =$_GET['id_envio_alquiler'];
		$doc_cliente=$_POST['doc_cliente'];
		$doc_admin=$_POST['doc_admin'];
		$id_producto=$_POST['id_producto'];
        $fecha_inicio=$_POST['fecha_inicio'];
        $fecha_fin=$_POST['fecha_fin'];
        $direccion_envio=$_POST['direccion_envio'];


	$sql ="UPDATE `envíos_alquiler` SET 
			`doc_cliente` = '$doc_cliente', 
			`doc_admin` = '$doc_admin', 
			`id_producto` = '$id_producto', 
            `fecha_inicio` = '$fecha_inicio',
            `fecha_fin` = '$fecha_fin',
            `direccion_envio` = '$direccion_envio'

			WHERE `envíos_alquiler`.`id_envio_alquiler` = $id_envio_alquiler";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "<script>
				alert('Actualización Exitosa');
				window.location='./mostrarenvioalquiler.php'
			   </script>";
			}else{
				echo mysqli_error($conexion);
			}
	}
	
?>