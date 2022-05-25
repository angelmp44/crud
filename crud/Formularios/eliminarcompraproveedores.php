<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_compra'])) {
		$id_compra = $_GET['id_compra'];
		$sql="DELETE FROM compra_proveedores WHERE `compra_proveedores`.`id_compra` = $id_compra";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    header('location: /crud/crud/Formularios/mostrarcompraproveedores.php')
?>