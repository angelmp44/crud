<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_proveedor'])) {
		$id_proveedor = $_GET['id_proveedor'];
		$sql="DELETE FROM proveedor WHERE `proveedor`.`id_proveedor` = $id_proveedor";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    header('location: /crud/crud/Formularios/mostrarproveedor.php')
?>

