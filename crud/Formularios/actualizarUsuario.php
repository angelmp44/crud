<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();

// de entrada se verifica esto
// si estos campos estan vacios no hacer la consulta
if(empty($id_usuario) || empty($nombre_usuario) || empty($correo_usuario)){
    echo "<script>
        alert('Error en actualización, ingresa datos válidos');
        window.location='./agendaUsuario.php'
        </script>"; 
}
else{
    if (isset($_GET['id_usuario'])) {
		$id_usuario =$_GET['id_usuario'];
		$nombre_usuario=$_POST['nombre_usuario'];
		$contraseña_usuario=$_POST['contraseña_usuario'];
        $correo_usuario=$_POST['correo_usuario'];
       
		

	$sql ="UPDATE `usuario` SET 
			`nombre_usuario` = '$nombre_usuario', 
			`contraseña_usuario` = '$contraseña_usuario', 
			`correo_usuario` = '$correo_usuario' 

			 
			WHERE `usuario`.`id_usuario` = $id_usuario ";
    
            //ejecutamos la consulta de insercion de registro       
                $query = $objConexion->query($sql);
                if($query){
                    echo "<script>
                    alert('Actualización Exitosa');
                    window.location='./agendaUsuario.php'
                        </script>"; 
                }
            }
            // los datos ingresados no se corresponden a los de la tabla ventayalquiler 
            // de donde esta llamando la informacion
            else{
                    echo "<script>
                        alert('Actualización incorrecta, datos no encontrados');
                        window.location='./agendaUsuario.php'
                      </script>";
                }
        
}

	
?>