<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO compra_proveedores (id_proveedor, id_producto, cant_producto_compra, valor_compra)
        VALUES ('$_REQUEST[id_proveedor]', '$_REQUEST[id_producto]', '$_REQUEST[cant_producto_compra]', 
        '$_REQUEST[valor_compra]') ";





// verificar que los datos existan en la tabla de la cual los esta llamando
$id_Proveedor = $_REQUEST['id_proveedor'];
$id_Producto =  $_REQUEST['id_producto'];

$sql2 = "SELECT * FROM compra_proveedores WHERE 
id_proveedor = '$id_Proveedor' AND  id_producto = '$idProducto' ";

// verificamos que los campos del formulario no esten vacios
if(empty($_REQUEST['cant_producto_compra'])|| empty($_REQUEST['valor_compra']) || empty($_REQUEST['id_producto'])
        || empty($_REQUEST['id_proveedor'])){

    echo "<script>
            alert('Registro incorrecto, llene todos los campos');
            window.location='./frm_compra_proveedores.php'
          </script>";

        }
        else{
            /* devuelve la cantidad de registros encontrados */
            $cantidad_registros1 = mysqli_num_rows($objConexion->query($sql2));  
          
             /* si cantidad_registros es por lo menos 1 entonces ese cliente si alquilo ese producto y el admin
        existe y por lo tanto se puede gestionar el envio del mismo */
        if($cantidad_registros1 != 0 ) {
            //ejecutamos la consulta de insercion de registro       
            $resultado = $objConexion->query($sql);
            if($resultado){
                echo "<script>
                alert('Registro Exitoso');
                window.location='./mostrarcompraproveedores.php'
                    </script>"; 
            }
    }
    // los datos ingresados no se corresponden a los de la tabla ventayalquiler 
    // de donde esta llamando la informacion
    else{
            echo "<script>
                alert('Registro incorrecto, datos no encontrados');
                window.location='./frm_compra_proveedores.php'
              </script>";
        }




// $resultado = $objConexion->query($sql);

// if($resultado){

// echo "<script>
// alert('Registro Exitoso');
 //window.location='./mostrarcompraproveedores.php'
//</script>";

}
//else{
  //  echo "error al registrar compra a proveedor";
// } 

?>