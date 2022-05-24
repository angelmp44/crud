<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO administrador (doc_admin, nombre_admin, apellido_admin, cargo_admin, correo_admin, 
                                    tel_admin, contraseña_admin)
        VALUES ('$_REQUEST[doc_admin]', '$_REQUEST[nombre_admin]', '$_REQUEST[apellido_admin]', 
        '$_REQUEST[cargo_admin]', '$_REQUEST[correo_admin]', '$_REQUEST[tel_admin]', 
        '$_REQUEST[contraseña_admin]') ";

$resultado = $objConexion->query($sql);

if($resultado){
    echo "Registro de administrador satisfactorio";
}
else{
    "error al registrar administrador";
}
?>