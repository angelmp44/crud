<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO venta_y_alquiler (fecha, doc_cliente, doc_admin, id_producto, cant_producto_venta_y_alquiler,
                                        valor_venta, valor_alquiler)

        VALUES ('$_REQUEST[fecha]', '$_REQUEST[doc_cliente]',
                '$_REQUEST[doc_admin]', '$_REQUEST[id_producto]',
                '$_REQUEST[cant_producto_venta_y_alquiler]', '$_REQUEST[valor_venta]',
                '$_REQUEST[valor_alquiler]') ";

$resultado = $objConexion->query($sql);

if($resultado){
    echo "Registro satisfactorio";
}
else{
    "error al registrar";
}
?>