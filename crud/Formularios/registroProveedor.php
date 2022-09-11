
<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO proveedor (id_proveedor, nombre_proveedor, telefono_proveedor, correo_proveedor, direccion_proveedor)
        VALUES ('$_REQUEST[id_proveedor]', '$_REQUEST[nombre_proveedor]', '$_REQUEST[telefono_proveedor]', '$_REQUEST[correo_proveedor]', 
        '$_REQUEST[direccion_proveedor]' )";

// consulta si el id ingresado ya esta registrado en la base de datos
$codigo = $_REQUEST['id_proveedor'];
$sql2 = "SELECT * FROM proveedor WHERE id_proveedor = $codigo";

//$resultado = $objConexion->query($sql);

// Verificacion de datos minimos
if(empty($_REQUEST['id_proveedor'])||empty($_REQUEST['nombre_proveedor'])
|| empty($_REQUEST['telefono_proveedor'])){

    echo "<script>
            alert('Registro incorrecto, ingrese id, nombre y teléfono');
            window.location='./frm_proveedor.php'
          </script>";
}
else { 

        // lo primero es validar que el codigo ingresado no este registrado en la base de datos
        $resultado1 = $objConexion->query($sql2);  

        $cantidad_registros = mysqli_num_rows($resultado1);  /* devuelve la cantidad de registros encontrados */

        /* si cantidad_registros = 1 entonces se el admin ya esta registrado*/
        if($cantidad_registros != 0 ) {
             echo "<script>
            alert('Proveedor ya registrado, intenta nuevamente');
            window.location='./frm_proveedor.php'
                </script>";
            }
        
//-------------------------------------------------------------------------------------------------

    $resultado2 = $objConexion->query($sql);
    if($resultado2){
        echo "<script>
        alert('Registro Exitoso');
        window.location='./mostrarproveedor.php'
            </script>"; 
    }
    else{
        echo "<script>
            alert('Registro incorrecto');
            window.location='./frm_proveedor.php'
          </script>";
    }
    
}



?>