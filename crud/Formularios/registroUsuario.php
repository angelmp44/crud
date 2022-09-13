<?php
$conexion = mysqli_connect("localhost", "root", "", "construequipos");

extract($_REQUEST); 

$usuario = $_POST["nombre_usuario"];
$contraseña = $_POST["contraseña_usuario"];
$correo = $_POST["correo_usuario"]; 

//==========================================================================
//consulta para comprobar que no haya otro usuario ya creado con el mismo correo
$sql2 = "SELECT correo_usuario FROM usuario WHERE correo_usuario = '$correo' "; 

$resultado2 = mysqli_query($conexion, $sql2);  

// funcion para saber si existe un usuario ya registrado con el mismo correo
$cantidad_registros = mysqli_num_rows($resultado2);
//===========================================================================
// validar longitud de contraseña

    $longitudContraseña = strlen ($contraseña);
//===========================================================================
//si algun campo esta vacio no permite registrar
if(empty($usuario) || empty($contraseña) || empty($correo)){
    echo "<script>
            alert('Validación incorrecta, ingresa todos los datos');
            window.location='./frm_registro_usuario.php'
          </script>";
}
//si ya existe el correo en la base de datos no permite registrar
else if($cantidad_registros != 0){
    echo "<script>
            alert('Correo ya registrado, intente nuevamente');
            window.location='./frm_registro_usuario.php'
          </script>";
}
else if($longitudContraseña<8){
    echo "<script>
            alert('Ingresa una contraseña mayor a 8 caracteres');
            window.location='./frm_registro_usuario.php'
          </script>";
}
else { 
    // consulta para registrar nuevo usuario
        $sql = "INSERT INTO usuario (nombre_usuario, contraseña_usuario, correo_usuario)
        VALUES ('$usuario', '$contraseña', '$correo') ";

        $resultado = mysqli_query($conexion, $sql); 

        if($resultado){
            echo    "<script>
                        alert('Usuario registrado exitosamente');
                        window.location='./frm_inicio_sesion_usuario.php'
                    </script>";
        }
    
}

?>