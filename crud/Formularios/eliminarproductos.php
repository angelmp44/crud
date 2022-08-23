<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['id_producto'])) {
		$id_producto = $_GET['id_producto'];
		$sql="DELETE FROM producto WHERE `producto`.`id_producto` = $id_producto";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "<script>
			alert('Eliminación Exitosa');
			window.location='./mostrarproductos.php'
		</script>"; 
		}else{
			echo mysqli_error($conexion) ;
		}
		
			}

 
?>