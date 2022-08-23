
<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO cliente (doc_cliente, nombre_cliente, apellido_cliente,	
                            tel_cliente, correo_cliente, direccion_cliente)
        VALUES ('$_REQUEST[doc_cliente]', '$_REQUEST[nombre_cliente]', '$_REQUEST[apellido_cliente]', 
        '$_REQUEST[tel_cliente]', '$_REQUEST[correo_cliente]', '$_REQUEST[direccion_cliente]') ";

$resultado = $objConexion->query($sql);

if($resultado){
    echo    "<script>
                alert('Registro Exitoso');
                window.location='./mostrarcliente.php'
            </script>"; 
}

else{
    echo "error al registrar cliente";
}

?>


