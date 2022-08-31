<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO compra_proveedores (id_proveedor, id_producto, cant_producto_compra, valor_compra)
        VALUES ('$_REQUEST[id_proveedor]', '$_REQUEST[id_producto]', '$_REQUEST[cant_producto_compra]', 
        '$_REQUEST[valor_compra]') ";










$resultado = $objConexion->query($sql);

if($resultado){

echo "<script>
alert('Registro Exitoso');
window.location='./mostrarcompraproveedores.php'
</script>";

}
else{
   echo "error al registrar compra a proveedor";
 } 

?>