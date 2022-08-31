


<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
$sql = "INSERT INTO administrador (doc_admin, nombre_admin, apellido_admin, cargo_admin, correo_admin,
tel_admin, contraseña_admin)

        VALUES ('$_REQUEST[doc_admin]', '$_REQUEST[nombre_admin]', '$_REQUEST[apellido_admin]', 
        '$_REQUEST[cargo_admin]', '$_REQUEST[correo_admin]', '$_REQUEST[tel_admin]', '$_REQUEST[contraseña_admin]') ";




if(empty($_REQUEST['doc_admin'])|| empty($_REQUEST['nombre_admin']) 
        || empty($_REQUEST['contraseña_admin'])){

    echo "<script>
            alert('Registro incorrecto, ingrese todos los datos solicitados');
            window.location='./frm_registro_administrador.php'
          </script>";
}
else {
    $resultado = $objConexion->query($sql);
    if($resultado){
        echo "<script>
        alert('Registro Exitoso');
        window.location='./frm_inicio_sesion_admin.php'
            </script>"; 
    }
    else{
        echo "<script>
            alert('Registro incorrecto');
            window.location='./frm_registro_administrador.php'
          </script>";
    }
    
}


?>