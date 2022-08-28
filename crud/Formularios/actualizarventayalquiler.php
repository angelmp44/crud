<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();


	if (isset($_GET['id_venta'])) {
		$id_venta = $_GET['id_venta'];
		$fecha = $_POST['fecha'];
		$doc_cliente = $_POST['doc_cliente'];
		$doc_admin = $_POST['doc_admin'];
        $id_producto = $_POST['id_producto'];
        $cant_producto_venta_y_alquiler = $_POST['cant_producto_venta_y_alquiler'];
        $valor_venta = $_POST['valor_venta'];
        $valor_alquiler = $_POST['valor_alquiler']; 

	    $sql ="UPDATE `venta_y_alquiler` SET 
			`fecha` = '$fecha', 
			`doc_cliente` = '$doc_cliente', 
			`doc_admin` = '$doc_admin', 
            `id_producto` = '$id_producto',
            `cant_producto_venta_y_alquiler` = '$cant_producto_venta_y_alquiler', 
            `valor_venta` = '$valor_venta', 
            `valor_alquiler` = '$valor_alquiler' 

			 
			WHERE `venta_y_alquiler`.`id_venta` = $id_venta";
		
		// verificar que exista el cliente en la tabla cliente, el admin en la tabla admin y el producto en la tabla
		// producto

		$sql2 = "SELECT * FROM cliente WHERE doc_cliente = '$doc_cliente'";
		$sql3 = "SELECT * FROM administrador WHERE doc_admin = '$doc_admin'";
		$sql4 =	"SELECT * FROM producto WHERE id_producto = ' $id_producto'";

		/* devuelve la cantidad de registros encontrados */
		$cantidad_registros1 = mysqli_num_rows($objConexion->query($sql2));  
		$cantidad_registros2 = mysqli_num_rows($objConexion->query($sql3));
		$cantidad_registros3 = mysqli_num_rows($objConexion->query($sql4));

		/* si cantidad_registros es por lo menos 1 entonces existe el cliente, el admin y el producto */
        if($cantidad_registros1 != 0 && $cantidad_registros2 != 0 && $cantidad_registros3 != 0) {
			//ejecutamos la consulta de insercion de registro       
			$resultado = $objConexion->query($sql);
			if($resultado){
				echo "<script>
				alert('Actualizacion exitosa!');
				window.location='./mostrarventayalquiler.php'
					</script>"; 
			}
	     }
		 else{
			echo "<script>
                    alert('Actualizacion incorrecta, datos invalidos');
                    window.location='./mostrarventayalquiler.php'
                  </script>";
		 }
		
	}
	
?>