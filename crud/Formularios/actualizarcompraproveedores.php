<?php
//$conexion =new mysqli("localhost","root","","construequipos")
//			or die("no hay conexion".mysqli_connect_error());




			require "../conexion.php";
			extract($_REQUEST);
			
			$objConexion = conectarse();

			

	if (isset($_GET['id_compra'])) {
		$id_compra =$_GET['id_compra'];
		$id_proveedor=$_POST['id_proveedor'];
		$id_producto=$_POST['id_producto'];
		$cant_producto_compra=$_POST['cant_producto_compra'];
        $valor_compra=$_POST['valor_compra'];

	$sql ="UPDATE `compra_proveedores` SET 
			`id_proveedor` = '$id_proveedor', 
			`id_producto` = '$id_producto', 
			`cant_producto_compra` = '$cant_producto_compra', 
            `valor_compra` = '$valor_compra'
			 
			WHERE `compra_proveedores`.`id_compra` = $id_compra";




// verificar que exista el cliente en la tabla cliente, el admin en la tabla admin y el producto en la tabla
		// producto

		$sql2 = "SELECT * FROM compra_proveedores WHERE 
id_proveedor = '$id_Proveedor' AND  id_producto = '$idProducto' ";

		/* devuelve la cantidad de registros encontrados */
		$cantidad_registros1 = mysqli_num_rows($objConexion->query($sql2));  
		
		

		 /* si cantidad_registros es por lo menos 1 entonces ese cliente si alquilo ese producto y el admin
        existe y por lo tanto se puede gestionar el envio del mismo */
        if($cantidad_registros1 != 0 ) {
            //ejecutamos la consulta de insercion de registro       
            $resultado = $objConexion->query($sql);
            if($resultado){
                echo "<script>
                alert('Registro Exitoso');
                window.location='./mostrarcompraproveedores.php'
                    </script>"; 
            }
    }
    // los datos ingresados no se corresponden a los de la tabla ventayalquiler 
    // de donde esta llamando la informacion
    else{
            echo "<script>
                alert('Registro incorrecto, datos no encontrados');
                window.location='./mostrarcompraproveedores.php'
              </script>";
        }











	//	$query =mysqli_query($conexion,$sql);
	//		if($query){
	//			echo "<script>
	//			alert('Actualización Exitosa');
	//			window.location='./mostrarcompraproveedores.php'
	//		   </script>";
	//		}else{
	//			echo mysqli_error($conexion);
	//		}
	}
	
?>