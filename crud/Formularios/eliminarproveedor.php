<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_proveedor'])) {
		$id_proveedor = $_GET['id_proveedor'];
		$sql="DELETE FROM proveedor WHERE `proveedor`.`id_proveedor` = $id_proveedor";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "<script>
			alert('Eliminación Exitosa');
			window.location='./mostrarproveedor.php'
		   </script>";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

    
?>

