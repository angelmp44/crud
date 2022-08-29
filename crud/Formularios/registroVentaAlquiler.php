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

// verificar que exista el cliente en la tabla cliente, el admin en la tabla admin y el producto en la tabla
// producto

$sql2 = "SELECT * FROM cliente WHERE doc_cliente = '$_REQUEST[doc_cliente]'";
$sql3 = "SELECT * FROM administrador WHERE doc_admin = '$_REQUEST[doc_admin]'";
$sql4 = "SELECT * FROM producto WHERE id_producto = '$_REQUEST[id_producto]'";

//$resultado = $objConexion->query($sql);

// verificamos que los campos del formulario no esten vacios
if(empty($_REQUEST['fecha'])|| empty($_REQUEST['doc_cliente']) || empty($_REQUEST['doc_admin'])
        || empty($_REQUEST['id_producto'])|| empty($_REQUEST['cant_producto_venta_y_alquiler'])){

    echo "<script>
            alert('Registro incorrecto, campos incompletos');
            window.location='./frm_venta_y_alquiler.php'
          </script>";
}
else{
/* devuelve la cantidad de registros encontrados */
$cantidad_registros1 = mysqli_num_rows($objConexion->query($sql2));  
$cantidad_registros2 = mysqli_num_rows($objConexion->query($sql3));
$cantidad_registros3 = mysqli_num_rows($objConexion->query($sql4));

        /* si cantidad_registros es por lo menos 1 entonces existe el cliente, el admin y el producto */
        if($cantidad_registros1 != 0 && $cantidad_registros2 != 0 && $cantidad_registros3 != 0) {
                //ejecutamos la consulta de insercion de registro       
                $resultado = $objConexion->query($sql);
                if($resultado){
                    echo "<script>
                    alert('Registro Exitoso');
                    window.location='./mostrarventayalquiler.php'
                        </script>"; 
                }
        }
        // los datos ingresados no se corresponden a las tablas
        // de donde esta llamando la informacion
        else{
                echo "<script>
                    alert('Registro incorrecto, datos no encontrados');
                    window.location='./frm_venta_y_alquiler.php'
                  </script>";
            }

}


?>

