<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO envíos_venta (doc_cliente, doc_admin, id_producto, fecha_entrega, direccion_envio
)
        VALUES ('$_REQUEST[doc_cliente]', '$_REQUEST[doc_admin]', '$_REQUEST[id_producto]', 
        '$_REQUEST[fecha_entrega]', '$_REQUEST[direccion_envio]')";

$resultado = $objConexion->query($sql);

if($resultado){

 echo "registro exitoso";

}
else{
    echo "<script>
    alert('Registro Exitoso');
    window.location='./mostrarenvioventa.php'
   </script>";
}

?>