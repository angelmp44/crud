<?php
//$conexion =new mysqli("localhost","root","","construequipos")
//			or die("no hay conexion".mysqli_connect_error());





			require "../conexion.php";
			extract($_REQUEST);
			
			$objConexion = conectarse();



	if (isset($_GET['id_envio_venta'])) {
		$id_envio_venta =$_GET['id_envio_venta'];
		$doc_cliente=$_POST['doc_cliente'];
		$doc_admin=$_POST['doc_admin'];
		$id_producto=$_POST['id_producto'];
        $fecha_entrega=$_POST['fecha_entrega'];
        $direccion_envio=$_POST['direccion_envio'];

	$sql ="UPDATE `envíos_venta` SET 
			`doc_cliente` = '$doc_cliente', 
			`doc_admin` = '$doc_admin', 
			`id_producto` = '$id_producto', 
            `fecha_entrega` = '$fecha_entrega',
            `direccion_envio` = '$direccion_envio'
			 
			WHERE `envíos_venta`.`id_envio_venta` = $id_envio_venta";




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
				window.location='./mostrarenvioventa.php'
					</script>"; 
			}
	     }
		 else{
			echo "<script>
                    alert('Actualizacion incorrecta, datos invalidos');
                    window.location='./mostrarenvioventa.php'
                  </script>";
		 }








		//$query =mysqli_query($conexion,$sql);
		//	if($query){
		//		echo "<script>
		//		alert('Actualización Exitosa');
		//		window.location='./mostrarenvioventa.php'
		//	   </script>";
		//	}else{
		//		echo mysqli_error($conexion);
		//	}
	}
	
?>