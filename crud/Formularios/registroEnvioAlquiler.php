<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO envíos_alquiler (doc_cliente, doc_admin, id_producto, fecha_inicio, fecha_fin, 
                                    direccion_envio)
        VALUES ('$_REQUEST[doc_cliente]', '$_REQUEST[doc_admin]', '$_REQUEST[id_producto]', 
        '$_REQUEST[fecha_inicio]', '$_REQUEST[fecha_fin]', '$_REQUEST[direccion_envio]')";

//$resultado = $objConexion->query($sql);


// verificar que los datos existan en la tabla de la cual los esta llamando
$doc_client =  $_REQUEST['doc_cliente'];
$doc_admin =  $_REQUEST['doc_admin'];
$idProducto = $_REQUEST['id_producto'];

$sql2 = "SELECT * FROM venta_y_alquiler WHERE 
doc_cliente = '$doc_client' AND id_producto = '$idProducto' ";

// verificar que el doc del admin ingresado exista como admin
$sql3 = "SELECT * FROM administrador WHERE doc_admin = '$doc_admin' ";

//----------------------------------------------------------------------------------
// verificamos que los campos del formulario no esten vacios
if(empty($_REQUEST['direccion_envio'])|| empty($_REQUEST['fecha_fin'])|| empty($_REQUEST['fecha_inicio']) 
|| empty($_REQUEST['id_producto']) || empty($_REQUEST['doc_admin'])|| empty($_REQUEST['doc_cliente'])){

    echo "<script>
            alert('Registro incorrecto, llena todos los campos');
            window.location='./mostrarenvioalquiler.php'
          </script>";
}
else{
/* devuelve la cantidad de registros encontrados */
$cantidad_registros1 = mysqli_num_rows($objConexion->query($sql2));  
$cantidad_registros2 = mysqli_num_rows($objConexion->query($sql3));

        /* si cantidad_registros es por lo menos 1 entonces ese cliente si alquilo ese producto y el admin
        existe y por lo tanto se puede gestionar el envio del mismo */
        if($cantidad_registros1 != 0 && $cantidad_registros2 != 0 ) {
                //ejecutamos la consulta de insercion de registro       
                $resultado = $objConexion->query($sql);
                if($resultado){
                    echo "<script>
                    alert('Registro Exitoso');
                    window.location='./mostrarenvioalquiler.php'
                        </script>"; 
                }
        }
        // los datos ingresados no se corresponden a los de la tabla ventayalquiler 
        // de donde esta llamando la informacion
        else{
                echo "<script>
                    alert('Registro incorrecto, datos no encontrados');
                    window.location='./mostrarenvioalquiler.php'
                  </script>";
            }
}

?>