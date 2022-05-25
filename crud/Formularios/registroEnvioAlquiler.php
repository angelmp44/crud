<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO envíos_alquiler (doc_cliente, doc_admin, id_producto, fecha_inicio, fecha_fin, 
                                    direccion_envio)
        VALUES ('$_REQUEST[doc_cliente]', '$_REQUEST[doc_admin]', '$_REQUEST[id_producto]', 
        '$_REQUEST[fecha_inicio]', '$_REQUEST[fecha_fin]', '$_REQUEST[direccion_envio]')";

$resultado = $objConexion->query($sql);

if($resultado){

 echo "registro exitoso";

}
else{
    echo "error al registrar envio";
}
header('location: /crud/crud/Formularios/mostrarenvioalquiler.php')
?>