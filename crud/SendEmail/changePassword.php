
<?php

// conectarse a la bd
require "../conexion.php";
$objConexion = conectarse();

//-------------------------------------------------------
// asegurarse de que haya un codigo en la url
if(!isset($_GET["codigo"])){
    echo "<script>
    alert('No se ha podido encontrar esta pagina');
    window.location='./passwordRecover.php';
        </script>";
}
//-------------------------------------------------
// capturamos el codigo de la url
$codigo = $_GET["codigo"];
// verificamos que el codigo exista en la bd
$sql = "SELECT * FROM cambio_contraseña WHERE codigo = '$codigo' ";
// si encuentra un registro con ese codigo entonces hay una solicitud de usuario de cambio de contraseña
$cantidad_registros = mysqli_num_rows($objConexion->query($sql));

if($cantidad_registros != 0){
    // validar si el codigo esta habilitado

    $sqlFechaExp =  "SELECT fecha_expiracion FROM cambio_contraseña WHERE codigo = '$codigo' ";
    $fila = mysqli_fetch_array($objConexion->query($sqlFechaExp));
    $fechaExp = $fila["fecha_expiracion"];

    // fecha actual
    $fecha = new DateTime('now', new DateTimeZone('America/Bogota'));
    $fechaActual = $fecha->format("Y-m-d H:i:s");  

    // si el codigo no ha expirado, hasta este momento se muestra el form
    if($fechaExp>$fechaActual){
        
        if(empty($_POST["contraseña1"]) || empty($_POST["contraseña2"])){
            echo "<script>
            alert('Ingresa una contraseña valida');
            window.location='./frm_cambiar_contraseña.php?codigo=$codigo'
                </script>";
        }
        else if($_POST["contraseña1"] != $_POST["contraseña2"]){
            echo "<script>
            alert('Las contraseñas no coinciden');
            window.location='./frm_cambiar_contraseña.php?codigo=$codigo'
                </script>";
        }
        else if(strlen ($_POST["contraseña1"]) < 8 ){
            echo "<script>
            alert('La contraseña debe ser mayor a 8 caracteres');
            window.location='./frm_cambiar_contraseña.php?codigo=$codigo'
                </script>";
        }
        else{
            // permitir cambio de contraseña si paso los filtros anteriores

            //obtener correo de usuario
            $sqlCorreo =  "SELECT correo FROM cambio_contraseña WHERE codigo = '$codigo' ";
            $fila = mysqli_fetch_array($objConexion->query($sqlCorreo));
            $correo = $fila["correo"];

            //contraseña nueva
            $contraseña = $_POST["contraseña1"];

            // consulta de actualizacion
            $consultaDeActualizacion = "UPDATE usuario 
                                        SET contraseña_usuario = '$contraseña'
                                        WHERE correo_usuario = '$correo' ";

            $resultado1 = $objConexion->query($consultaDeActualizacion);

            // eliminar codigo usado
            $eliminarCodigo = "DELETE FROM cambio_contraseña WHERE codigo = '$codigo'";
            $resultado2 = $objConexion->query($eliminarCodigo);

            if($resultado1 && $resultado2){
                echo "<script>
                alert('Contraseña actualizada satisfactoriamente');
                window.location='../Formularios/frm_inicio_sesion_usuario.php'
                    </script>"; 
            }
            else{
                echo "<script>
                alert('Actualización incorrecta, intenta nuevamente');
                window.location='../Formularios/frm_inicio_sesion_usuario.php'
                    </script>"; 
            }

        }
    }
    else{
        // codigo invalido si el codigo ya expiró
        $eliminarCodigo = "DELETE FROM cambio_contraseña WHERE codigo = '$codigo'";
        $resultado = $objConexion->query($eliminarCodigo);
        if($resultado){
            echo "<script>
            alert('código expirado');
            window.location='./passwordRecover.php'
                </script>";
        }
    }

}
else{
    echo "<script>
            alert('No es posible reestablecer la contraseña, intenta nuevamente');
            window.location='./passwordRecover.php'
          </script>";
}
?>


