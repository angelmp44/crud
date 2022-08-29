<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();

/*creacion de variables*/
$idProveedor = $_REQUEST['id_proveedor'];
$nombreProducto = $_REQUEST['nombre_producto'];
$tipoProducto = $_REQUEST['tipo_producto'];
$cantProducto = $_REQUEST['cant_producto'];
$precioVenta = $_REQUEST['precio_venta'];
$precioAlquiler = $_REQUEST['precio_alquiler_dia'];


$sql = "INSERT INTO producto (id_proveedor, nombre_producto, tipo_producto, cant_producto, 
                                    precio_venta, precio_alquiler_dia)

        VALUES ('$idProveedor', '$nombreProducto', 
                '$tipoProducto', '$cantProducto', 
                '$precioVenta', '$precioAlquiler') ";

// verificar que el proveedor ingresado exista
$sql2 = "SELECT * FROM proveedor WHERE id_proveedor =  '$idProveedor' "; 

if(empty($cantProducto)|| empty($tipoProducto) || empty($nombreProducto)
        || empty($idProveedor)){

    echo "<script>
            alert('Registro incorrecto, ingrese los datos');
            window.location='./frm_producto.php'
          </script>";
}
else {
    $cantidad_registros = mysqli_num_rows($objConexion->query($sql2));  
    /* si cantidad_registros es por lo menos 1 entonces existe el proveedor y se realiza 
    el registro de producto */
        if($cantidad_registros != 0) {
            //ejecutamos la consulta de insercion de registro       
            $resultado = $objConexion->query($sql);
            if($resultado){
                echo "<script>
                alert('Registro Exitoso');
                window.location='./mostrarproductos.php'
                    </script>"; 
            }
    }
    else{
        echo "<script>
            alert('Registro incorrecto');
            window.location='./frm_producto.php'
          </script>";
    }
    
}


?>