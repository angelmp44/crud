<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();

	if (isset($_GET['id_proveedor'])) {
		// con el metodo get se obtiene el id de proveedor actual
		$id_proveedorAntiguo =$_GET['id_proveedor'];
		// con el metodo post se obtiene el id de proveedor nuevo
		$id_proveedorNuevo =$_POST['id_proveedor'];
		$nombre_proveedor=$_POST['nombre_proveedor'];
		$telefono_proveedor=$_POST['telefono_proveedor'];
		$correo_proveedor=$_POST['correo_proveedor'];
        $direccion_proveedor=$_POST['direccion_proveedor'];

		// crear nuevo registro de proveedor con los datos nuevos (solo si el id_proveedor es nuevo)
		$sql1 = "INSERT INTO proveedor 
		(id_proveedor, nombre_proveedor, telefono_proveedor, correo_proveedor, direccion_proveedor)
        VALUES 
		('$id_proveedorNuevo', '$nombre_proveedor', '$telefono_proveedor', 
		'$correo_proveedor', '$direccion_proveedor' )";
	
		// actualizacion de proveedor (solo si el id_proveedor es el mismo)
		$sql2 ="UPDATE `proveedor` SET 
			`id_proveedor` = '$id_proveedorNuevo',
			`nombre_proveedor` = '$nombre_proveedor', 
			`telefono_proveedor` = '$telefono_proveedor', 
			`correo_proveedor` = '$correo_proveedor', 
            `direccion_proveedor` = '$direccion_proveedor'
			 
			WHERE `proveedor`.`id_proveedor` = $id_proveedorAntiguo";
			
		// actualizacion de tablas afectadas por la actualizacion
		// actualizacion de productos
		$sql3 = "UPDATE producto 
				 SET id_proveedor = '$id_proveedorNuevo'
				 WHERE producto.id_proveedor = $id_proveedorAntiguo  ";

		// verificacion de codigo de proveedor
		$sql4 = "SELECT * FROM proveedor WHERE id_proveedor = $id_proveedorNuevo";

		// eliminacion de proveedor antiguo
		$sql5 = "DELETE FROM proveedor WHERE id_proveedor = $id_proveedorAntiguo";

	

// antes de ejecutar la consulta verificar datos mínimos

if(empty($id_proveedorNuevo) || empty($_REQUEST['nombre_proveedor']) 
		|| empty($_REQUEST['telefono_proveedor'])) {
	echo "<script>
            alert('Actualizacion incorrecta, ingrese id, nombre y teléfono');
            window.location='./mostrarproveedor.php'
          </script>";
}
else{

	// verificar si el id nuevo existe ya en la bd (no cambio el id_proveedor)
	$resultado1 = $objConexion->query($sql4);  

	$cantidad_registros = mysqli_num_rows($resultado1);  /* devuelve la cantidad de registros encontrados */

	/* si cantidad_registros = 1 entonces el proveedor tiene el mismo id*/
	if($cantidad_registros != 0 ) {
		$resultado2 = $objConexion->query($sql2);
	
		if($resultado2){
			echo "<script>
			alert('Actualización de datos de proveedor exitosa');
			window.location='./mostrarproveedor.php'
		   </script>";
		}else{
			echo "<script>
			alert('Actualización de datos incorrecta');
			window.location='./mostrarproveedor.php'
		   </script>";
			
			}
		}
	else{
		// crear nuevo proveedor
		$resultado3 = $objConexion->query($sql1);
		// actualizamos productos con el id_proveedor nuevo
		$resultado4 = $objConexion->query($sql3);
		// eliminar proveedor antiguo
		$resultado5 = $objConexion->query($sql5);
	
		if($resultado3 && $resultado4 && $resultado5){
			echo "<script>
			alert('Actualización Exitosa');
			window.location='./mostrarproveedor.php'
		   </script>";
		}else{
			echo "<script>
			alert('Actualización Incorrecta, inconvenientes con id_proveedorNuevo');
			window.location='./mostrarproveedor.php'
		   </script>";
			
			}	
	}	
  }	
}
else{
	echo "<script>
			alert('Actualización Incorrecta');
			window.location='./mostrarproveedor.php'
		   </script>";
}
?>