
<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO proveedor (nombre_proveedor, telefono_proveedor, correo_proveedor, direccion_proveedor)
        VALUES ('$_REQUEST[nombre_proveedor]', '$_REQUEST[telefono_proveedor]', '$_REQUEST[correo_proveedor]', 
        '$_REQUEST[direccion_proveedor]' )";

//$resultado = $objConexion->query($sql);

// Verificacion de datos minimos
if(empty($_REQUEST['nombre_proveedor'])|| empty($_REQUEST['telefono_proveedor'])){

    echo "<script>
            alert('Registro incorrecto, ingrese nombre y teléfono');
            window.location='./mostrarproveedor.php'
          </script>";
}
else {
    $resultado = $objConexion->query($sql);
    if($resultado){
        echo "<script>
        alert('Registro Exitoso');
        window.location='./mostrarproveedor.php'
            </script>"; 
    }
    else{
        echo "<script>
            alert('Registro incorrecto');
            window.location='./mostrarproveedor.php'
          </script>";
    }
    
}



?>