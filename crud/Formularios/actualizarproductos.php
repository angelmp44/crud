<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();

	if (isset($_GET['id_producto'])) {
		// id_producto antiguo
		$id_productoAntiguo =$_GET['id_producto'];
		// id_producto nuevo
		$id_productoNuevo =$_POST['id_producto'];
		$id_proveedor=$_POST['id_proveedor'];
		$nombre_producto=$_POST['nombre_producto'];
		$tipo_producto=$_POST['tipo_producto'];
        $cant_producto=$_POST['cant_producto'];
        $precio_venta=$_POST['precio_venta'];
        $precio_alquiler_dia=$_POST['precio_alquiler_dia'];


	// esta consulta se hace cuando el id_producto no cambia	
	$sql1 ="UPDATE `producto` SET 
			`id_producto` = '$id_productoNuevo',
			`id_proveedor` = '$id_proveedor',
			`nombre_producto` = '$nombre_producto', 
			`tipo_producto` = '$tipo_producto', 
            `cant_producto` = '$cant_producto',
            `precio_venta` = '$precio_venta',
            `precio_alquiler_dia` = '$precio_alquiler_dia'
 
			WHERE `producto`.`id_producto` = $id_productoAntiguo";

	// crear nuevo registro de producto con los datos nuevos (solo si el id_producto es nuevo)
	$sql2 = "INSERT INTO producto
	(id_producto, id_proveedor, nombre_producto, tipo_producto, 
	cant_producto, precio_venta, precio_alquiler_dia)
	VALUES 
	('$id_productoNuevo', '$id_proveedor', '$nombre_producto', 
	'$tipo_producto', '$cant_producto', '$precio_venta', '$precio_alquiler_dia' )";

	// actualizacion de tablas afectadas por la actualizacion
	$sql3 = "UPDATE compra_proveedores 
			 SET id_producto = '$id_productoNuevo'
			 WHERE compra_proveedores.id_producto = $id_productoAntiguo  ";

	$sql4 = "UPDATE envíos_alquiler
			SET id_producto = '$id_productoNuevo'
			 WHERE envíos_alquiler.id_producto = $id_productoAntiguo  ";

	$sql5 = "UPDATE envíos_venta
			SET id_producto = '$id_productoNuevo'
 			WHERE envíos_venta.id_producto = $id_productoAntiguo  ";
	
	$sql6 = "UPDATE venta_y_alquiler
			SET id_producto = '$id_productoNuevo'
			 WHERE venta_y_alquiler.id_producto = $id_productoAntiguo  ";

	// verificacion de codigo de producto
	$sql7 = "SELECT * FROM producto WHERE id_producto = $id_productoNuevo";

	// eliminacion de producto antiguo
	$sql8 = "DELETE FROM producto WHERE id_producto = $id_productoAntiguo";
	
	// insercion registro comodin
	$comodin = "INSERT INTO  `venta_y_alquiler` 
	(`fecha`, `doc_cliente`, `doc_admin`, `id_producto`, 
	`cant_producto_venta_y_alquiler`, `valor_venta`, `valor_alquiler`) 
	VALUES ('0000-00-00', '1', '1', '$id_productoNuevo', '1', '-1', '-1')";
	
	// eliminacion de registro comodin en ventas y alquiler
	$deleteComodin = "DELETE FROM ventas_y_alquiler WHERE valor_venta = '-1' ";

	


	// antes de ejecutar la consulta verificar datos mínimos

if(empty($id_productoNuevo) || empty($_REQUEST['nombre_producto']) 
|| empty($_REQUEST['id_proveedor'])|| $_REQUEST['tipo_producto'] == "Seleccionar" 
|| empty($_REQUEST['cant_producto'])) {
echo "<script>
	alert('Actualizacion incorrecta, ingrese todos los datos');
	window.location='./mostrarproductos.php'
  </script>";
}
else{

// verificar si el id nuevo existe ya en la bd (no cambió el id_proveedor)
$resultado = $objConexion->query($sql7);  

$cantidad_registros = mysqli_num_rows($resultado);  /* devuelve la cantidad de registros encontrados */

/* si cantidad_registros = 1 entonces el proveedor tiene el mismo id*/
if($cantidad_registros != 0 ) {
$resultado = $objConexion->query($sql1);

if($resultado){
	echo "<script>
	alert('Actualización de datos de producto exitosa');
	window.location='./mostrarproductos.php'
   </script>";
}else{
	echo "<script>
	alert('Actualización de datos incorrecta');
	window.location='./mostrarproductos.php'
   </script>";
	
	}
}
else{
// crear nuevo producto con el id nuevo
$resultado = $objConexion->query($sql2);
// verificar que en dichas tablas aparezcan registros con el id_productoAntiguo

//-------------------------------------------------------------------------------
// verificacion en compra proveedores
$sql9 = "SELECT * FROM compra_proveedores WHERE id_producto = $id_productoAntiguo";
// ejecucion de consulta
$resultado = $objConexion->query($sql9);  
/* devuelve la cantidad de registros encontrados */
$cantidad_registros = mysqli_num_rows($resultado);  
// si encuentra registros entonces los actualizamos
if($cantidad_registros != 0){
	$resultado = $objConexion->query($sql3);
	if(!$resultado){
		echo "<script>
		alert('Error en actualización');
		window.location='./mostrarproductos.php'
	   </script>";
	}
}
//-------------------------------------------------------------------------------
// verificacion en venta y alquiler

$sql12 = "SELECT * FROM venta_y_alquiler WHERE id_producto = $id_productoAntiguo";

// ejecucion de consulta
$resultado = $objConexion->query($sql12);  
/* devuelve la cantidad de registros encontrados */
$cantidad_registros = mysqli_num_rows($resultado);  
// si encuentra registros entonces hacemos el comodin
if($cantidad_registros != 0){
	
	$resultado = $objConexion->query($comodin);
	if($resultado){
		//-------------------------------------------------------------------------------

		// verificacion en envios alquiler
		$sql10 = "SELECT * FROM envíos_alquiler WHERE id_producto = $id_productoAntiguo";

		// ejecucion de consulta
		$resultado = $objConexion->query($sql10);  
		/* devuelve la cantidad de registros encontrados */
		$cantidad_registros = mysqli_num_rows($resultado);  
		// si encuentra registros entonces los actualizamos
			if($cantidad_registros != 0){
				$resultado = $objConexion->query($sql4);
				if(!$resultado){
					echo "<script>
					alert('Error en actualización');
					window.location='./mostrarproductos.php'
	   					</script>";
							}
				}
//-------------------------------------------------------------------------------

		// verificacion en envios venta
		$sql11 = "SELECT * FROM envíos_venta WHERE id_producto = $id_productoAntiguo";

		// ejecucion de consulta
		$resultado = $objConexion->query($sql11);  
		/* devuelve la cantidad de registros encontrados */
		$cantidad_registros = mysqli_num_rows($resultado);  
		// si encuentra registros entonces los actualizamos
		if($cantidad_registros != 0){
			$resultado = $objConexion->query($sql5);
			if(!$resultado){
				echo "<script>
				alert('Error en actualización');
				window.location='./mostrarproductos.php'
	   				</script>";
			}
		}
		// despues de actualizados los registros en las tablas de ventas (si los hay)
		// se actualizan los registros en la tabla de ventas y alquileres
		$resultado = $objConexion->query($sql6);
		if(!$resultado){
			echo "<script>
			alert('Error en actualización');
			window.location='./mostrarproductos.php'
				   </script>";
		}
	}
}


//-------------------------------------------------------------------------------
// eliminar registro comodin en tabla ventas y alquiler

// eliminar producto antiguo
$resultado = $objConexion->query($sql8);

if($resultado){
	echo "<script>
	alert('Actualización Exitosa');
	window.location='./mostrarproductos.php'
   </script>";
}else{
	echo "<script>
	alert('Actualización Incorrecta, inconvenientes con id_productoNuevo');
	window.location='./mostrarproductos.php'
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