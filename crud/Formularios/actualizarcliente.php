<?php
$conexion =new mysqli("localhost","root","","construequipos")
			or die("no hay conexion".mysqli_connect_error());

	if (isset($_GET['doc_cliente'])) {
		$doc_cliente =$_GET['doc_cliente'];
		$nombre_cliente=$_POST['nombre_cliente'];
		$apellido_cliente=$_POST['apellido_cliente'];
		$tel_cliente=$_POST['tel_cliente'];
		$correo_cliente=$_POST['correo_cliente'];
        $direccion_cliente=$_POST['direccion_cliente'];

	$sql ="UPDATE `cliente` SET 
			`nombre_cliente` = '$nombre_cliente', 
			`apellido_cliente` = '$apellido_cliente', 
			`tel_cliente` = '$tel_cliente', 
			`correo_cliente` = '$correo_cliente', 
            `direccion_cliente` = '$direccion_cliente'
			 
			WHERE `cliente`.`doc_cliente` = $doc_cliente";

		$query =mysqli_query($conexion,$sql);
			if($query){
				echo "<script>
                alert('Actualización Exitosa');
                window.location='./mostrarcliente.php'
            </script>"; 
			}else{
				echo mysqli_error($conexion);
			}
	}
	
?>