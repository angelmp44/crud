
<?php
function conectarse(){
    $Conexion = new MySQLi  ("localhost", "root", "", "construequipos");

    if($Conexion -> connect_errno)
        echo "Error en la conexion".$Conexion -> connect_error;
    else
        return $Conexion;
}
    

?>