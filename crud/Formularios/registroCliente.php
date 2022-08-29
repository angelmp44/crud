
<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO cliente (doc_cliente, nombre_cliente, apellido_cliente,	
                            tel_cliente, correo_cliente, direccion_cliente)
        VALUES ('$_REQUEST[doc_cliente]', '$_REQUEST[nombre_cliente]', '$_REQUEST[apellido_cliente]', 
        '$_REQUEST[tel_cliente]', '$_REQUEST[correo_cliente]', '$_REQUEST[direccion_cliente]') ";

//$resultado = $objConexion->query($sql);


if(empty($_REQUEST['doc_cliente'])|| empty($_REQUEST['nombre_cliente']) 
        || empty($_REQUEST['tel_cliente'])){

    echo "<script>
            alert('Registro incorrecto, ingrese documento, nombre y teléfono');
            window.location='./frm_cliente.php'
          </script>";
}
else {
    $resultado = $objConexion->query($sql);
    if($resultado){
        echo "<script>
        alert('Registro Exitoso');
        window.location='./mostrarcliente.php'
            </script>"; 
    }
    else{
        echo "<script>
            alert('Registro incorrecto');
            window.location='./frm_cliente.php'
          </script>";
    }
    
}


?>


