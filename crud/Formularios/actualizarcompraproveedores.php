<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_compra'])) {
		$id_compra =$_GET['id_compra'];
		$id_proveedor=$_POST['id_proveedor'];
		$id_producto=$_POST['id_producto'];
		$cant_producto_compra=$_POST['cant_producto_compra'];
        $valor_compra=$_POST['valor_compra'];

	$sql ="UPDATE `compra_proveedores` SET 
			`id_proveedor` = '$id_proveedor', 
			`id_producto` = '$id_productor', 
			`cant_producto_compra` = '$cant_producto_compra', 
            `valor_compra` = '$valor_compra'
			 
			WHERE `compra_proveedores`.`id_compra` = $id_compra";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "1 fila actualizada";
			}else{
				echo mysqli_error($conexion);
			}
	}
	header('location: /crud/crud/Formularios/mostrarcompraproveedores.php')
?>