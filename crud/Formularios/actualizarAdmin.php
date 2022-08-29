<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();

// de entrada se verifica esto
// si estos campos estan vacios no hacer la consulta
if(empty($nombre_admin) || empty($doc_admin) || $cargo_admin == "Seleccionar"){
    echo "<script>
        alert('Error en actualizacion, ingresa datos validos');
        window.location='./agendaAdmin.php'
        </script>"; 
}
else{
    if (isset($_GET['doc_admin'])) {
		$doc_admin =$_GET['doc_admin'];
		$nombre_admin=$_POST['nombre_admin'];
		$apellido_admin=$_POST['apellido_admin'];
        $cargo_admin=$_POST['cargo_admin'];
        $correo_admin=$_POST['correo_admin'];
		$tel_admin=$_POST['tel_admin'];
		

	$sql ="UPDATE `administrador` SET 
			`nombre_admin` = '$nombre_admin', 
			`apellido_admin` = '$apellido_admin', 
			`cargo_admin` = '$cargo_admin', 
			`correo_admin` = '$correo_admin', 
            `tel_admin` = '$tel_admin'
			 
			WHERE `administrador`.`doc_admin` = $doc_admin ";
    
            //ejecutamos la consulta de insercion de registro       
                $query = $objConexion->query($sql);
                if($query){
                    echo "<script>
                    alert('Actualizacion Exitosa');
                    window.location='./agendaAdmin.php'
                        </script>"; 
                }
            }
            // los datos ingresados no se corresponden a los de la tabla ventayalquiler 
            // de donde esta llamando la informacion
            else{
                    echo "<script>
                        alert('Actualizacion incorrecta, datos no encontrados');
                        window.location='./agendaAdmin.php'
                      </script>";
                }
        
}

	
?>