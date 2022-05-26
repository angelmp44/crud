<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_producto'])) {
		$id_producto = $_GET['id_producto'];
		$sql="DELETE FROM producto WHERE `producto`.`id_producto` = $id_producto";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    header('location: mostrarproductos.php')
?>