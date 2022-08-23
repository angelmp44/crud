<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['id_producto'])) {
		$id_producto =$_GET['id_producto'];
		$id_proveedor=$_POST['id_proveedor'];
		$nombre_producto=$_POST['nombre_producto'];
		$tipo_producto=$_POST['tipo_producto'];
        $cant_producto=$_POST['cant_producto'];
        $precio_venta=$_POST['precio_venta'];
        $precio_alquiler_dia=$_POST['precio_alquiler_dia'];

	$sql ="UPDATE `producto` SET 
			`id_proveedor` = '$id_proveedor',
			`nombre_producto` = '$nombre_producto', 
			`tipo_producto` = '$tipo_producto', 
            `cant_producto` = '$cant_producto',
            `precio_venta` = '$precio_venta',
            `precio_alquiler_dia` = '$precio_alquiler_dia'

			 
			WHERE `producto`.`id_producto` = $id_producto";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "<script>
				alert('Actualización Exitosa');
				window.location='./mostrarproductos.php'
			</script>"; 
			}else{
				echo mysqli_error($conexion);
			}
	}
	
?> 