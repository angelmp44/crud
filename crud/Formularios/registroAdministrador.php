


<?php
require "../conexion.php";
extract($_REQUEST);

$objConexion = conectarse();
// consulta para registro de admin
$sql = "INSERT INTO administrador (doc_admin, nombre_admin, apellido_admin, cargo_admin, correo_admin,
tel_admin, contraseña_admin)

        VALUES ('$_REQUEST[doc_admin]', '$_REQUEST[nombre_admin]', '$_REQUEST[apellido_admin]', 
        '$_REQUEST[cargo_admin]', '$_REQUEST[correo_admin]', '$_REQUEST[tel_admin]', '$_REQUEST[contraseña_admin]') ";

// consulta si el doc ingresado ya esta registrado en la base de datos
$documento = $_REQUEST['doc_admin'];
$sql2 = "SELECT * FROM administrador WHERE doc_admin = $documento";



if(empty($_REQUEST['doc_admin'])|| empty($_REQUEST['nombre_admin']) 
        || empty($_REQUEST['contraseña_admin'])|| empty($_REQUEST['correo_admin'])){

    echo "<script>
            alert('Registro incorrecto, ingrese todos los datos solicitados');
            window.location='./frm_registro_administrador.php'
          </script>";
}
else {  
        // lo primero es validar que el documento ingresado no este registrado en la base de datos
        $resultado1 = $objConexion->query($sql2);  

        $cantidad_registros = mysqli_num_rows($resultado1);  /* devuelve la cantidad de registros encontrados */

        /* si cantidad_registros = 1 entonces se el admin ya esta registrado*/
        if($cantidad_registros != 0 ) {
            echo "<script>
            alert('Administrador ya registrado, intenta nuevamente');
            window.location='./frm_registro_administrador.php'
          </script>";
        }
        //-------------------------------------------------------------------------------------------------
        // después validar si el correo para el registro de admin es institucional
        $correo = $_REQUEST['correo_admin'];

        // además validar que la contraseña sea mayor o igual a 8 caracteres
        $contraseña = $_REQUEST['contraseña_admin'];
        $longitudContraseña = strlen ($contraseña);
 
        if(str_contains($correo, "@hdconstruequipos.com") && $longitudContraseña>=8) {
            $resultado2 = $objConexion->query($sql);
            if($resultado2){
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
            else{
                echo "<script>
                alert('Ingresa tu correo institucional y una contraseña mayor a 8 caracteres');
                window.location='./frm_registro_administrador.php'
                    </script>"; 
            }
}


?>