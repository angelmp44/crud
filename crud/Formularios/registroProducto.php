<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO producto (id_proveedor, nombre_producto, tipo_producto, cant_producto, 
                                    precio_venta, precio_alquiler_dia)

        VALUES ('$_REQUEST[id_proveedor]', '$_REQUEST[nombre_producto]', 
                '$_REQUEST[tipo_producto]', '$_REQUEST[cant_producto]', 
                '$_REQUEST[precio_venta]', '$_REQUEST[precio_alquiler_dia]') ";

$resultado = $objConexion->query($sql);

if($resultado){
    echo "<script>
    alert('Registro Exitoso');
    window.location='./mostrarproductos.php'
</script>"; 
}
else{
    "error al registrar producto";
}

?>