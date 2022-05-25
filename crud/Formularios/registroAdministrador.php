<?php
$conexion = mysqli_connect("localhost", "root", "", "construequipos");


$doc = $_POST["doc_admin"];
$nombre = $_POST["nombre_admin"];
$apellido = $_POST["apellido_admin"];
$cargo = $_POST["cargo_admin"];
$correo = $_POST["correo_admin"]; 
$telefono = $_POST["tel_admin"];
$contraseña = $_POST["contraseña_admin"];

//==========================================================================
//consulta para comprobar que no haya otro usuario ya creado con el mismo documento
$sql2 = "SELECT doc_admin FROM administrador WHERE doc_admin = '$doc' "; 

$resultado2 = mysqli_query($conexion, $sql2);  

// funcion para saber si existe un usuario ya registrado con el mismo correo
$cantidad_registros = mysqli_num_rows($resultado2);

//===========================================================================
//si algun campo esta vacio no permite registrar
if(empty($doc) || empty($nombre) || empty($apellido) ||
     empty($cargo)|| empty($correo)|| empty($telefono)|| empty($contraseña)){
    echo "<script>
            alert('Validacion incorrecta, intenta nuevamente');
            window.location='./frm_registro_administrador.php'
          </script>";
}
//si ya existe el correo en la base de datos no permite registrar
else if($cantidad_registros != 0){
    echo "<script>
            alert('Administrador existente, intenta nuevamente');
            window.location='./frm_registro_administrador.php'
          </script>";
}

else {
    // consulta para registrar nuevo usuario
        $sql = "INSERT INTO administrador (doc_admin, nombre_admin, apellido_admin, cargo_admin, correo_admin,
        tel_admin, contraseña_admin)
        VALUES ('$doc', '$nombre', '$apellido', '$cargo', '$correo', '$telefono', '$contraseña') ";

        $resultado = mysqli_query($conexion, $sql); 

        if($resultado){
            echo    "<script>
                        alert('Administrador registrado');
                        window.location='./frm_inicio_sesion_admin.php'
                    </script>";
        }
}

?> 