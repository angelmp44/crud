<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_envio_alquiler'])) {
		$id_envio_alquiler = $_GET['id_envio_alquiler'];
		$sql="DELETE FROM envíos_alquiler WHERE `envíos_alquiler`.`id_envio_alquiler` = $id_envio_alquiler";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    header('location: mostrarenvioalquiler.php')
?>