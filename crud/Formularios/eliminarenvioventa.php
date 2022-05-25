<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_envio_venta'])) {
		$id_envio_venta = $_GET['id_envio_venta'];
		$sql="DELETE FROM envíos_venta WHERE `envíos_venta`.`id_envio_venta` = $id_envio_venta";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    header('location: /crud/crud/Formularios/mostrarenvioventa.php')
?>