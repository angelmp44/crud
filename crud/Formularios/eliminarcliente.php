<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());


	if (isset($_GET['doc_cliente'])) {
		$doc_cliente = $_GET['doc_cliente'];
		$sql="DELETE FROM cliente WHERE `cliente`.`doc_cliente` = $doc_cliente";

		$query =mysqli_query($conexion, $sql);

		if ($query) {
			echo "1 fila eliminada";
		}else{
			echo mysqli_error($conexion);
		}
		
			}

	header('location: mostrarcliente.php')
?>

