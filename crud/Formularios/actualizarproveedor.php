<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_proveedor'])) {
		$id_proveedor =$_GET['id_proveedor'];
		$nombre_proveedor=$_POST['nombre_proveedor'];
		$telefono_proveedor=$_POST['telefono_proveedor'];
		$correo_proveedor=$_POST['correo_proveedor'];
        $direccion_proveedor=$_POST['direccion_proveedor'];

	$sql ="UPDATE `proveedor` SET 
			`nombre_proveedor` = '$nombre_proveedor', 
			`telefono_proveedor` = '$telefono_proveedor', 
			`correo_proveedor` = '$correo_proveedor', 
            `direccion_proveedor` = '$direccion_proveedor'
			 
			WHERE `proveedor`.`id_proveedor` = $id_proveedor";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "<script>
				alert('Actualización Exitosa');
				window.location='./mostrarproveedor.php'
			   </script>";
			}else{
				echo mysqli_error($conexion);
			}
	}
	
?>