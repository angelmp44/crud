<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO usuario (nombre_usuario, contraseña_usuario, correo_usuario)
        VALUES ('$_REQUEST[nombre_usuario]', '$_REQUEST[contraseña_usuario]', '$_REQUEST[correo_usuario]') ";

$resultado = $objConexion->query($sql);

if($resultado){
    echo "Registro de usuario satisfactorio";
}
else{
    "error al registrar usuario";
}
?>