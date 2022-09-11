<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

extract($_REQUEST);

	if (isset($_GET['id_proveedor'])) {
		// con el metodo get se obtiene el id de proveedor actual
		$id_proveedorAntiguo =$_GET['id_proveedor'];
		// con el metodo post se obtiene el id de proveedor nuevo
		$id_proveedorNuevo =$_POST['id_proveedor'];
		$nombre_proveedor=$_POST['nombre_proveedor'];
		$telefono_proveedor=$_POST['telefono_proveedor'];
		$correo_proveedor=$_POST['correo_proveedor'];
        $direccion_proveedor=$_POST['direccion_proveedor'];

	$sql ="UPDATE `proveedor` SET 
			`id_proveedor` = '$id_proveedorNuevo',
			`nombre_proveedor` = '$nombre_proveedor', 
			`telefono_proveedor` = '$telefono_proveedor', 
			`correo_proveedor` = '$correo_proveedor', 
            `direccion_proveedor` = '$direccion_proveedor'
			 
			WHERE `proveedor`.`id_proveedor` = $id_proveedorAntiguo";

	

// antes de ejecutar la consulta verificar datos mínimos

if(empty($id_proveedorNuevo) || empty($_REQUEST['nombre_proveedor']) 
		|| empty($_REQUEST['telefono_proveedor'])) {
	echo "<script>
            alert('Actualizacion incorrecta, ingrese id, nombre y teléfono');
            window.location='./mostrarproveedor.php'
          </script>";
}
else{

	// antes de ejecutar la consulta, verificar que el id nuevo no exista ya en la bd (proveedor registrado)
	// actualizar los productos asociados a ese proveedor

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
	
}
	
?>