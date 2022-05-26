<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_venta'])) {
		$id_venta = $_GET['id_venta'];
		$sql="DELETE FROM venta_y_alquiler WHERE `venta_y_alquiler`.`id_venta` = $id_venta";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "<script>
			alert('Eliminacion exitosa');
			window.location='./mostrarventayalquiler.php'
		  </script>";
		}
		else{
			echo "<script>
			alert('Eliminacion incorrecta');
			window.location='./mostrarventayalquiler.php'
		  </script>";
		}

	}
	

?>