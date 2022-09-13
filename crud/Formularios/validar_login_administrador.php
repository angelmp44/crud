<?php

        $conexion = mysqli_connect("localhost", "root", "", "construequipos");

        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];
       
        $sql = "SELECT * FROM administrador WHERE correo_admin= '$correo' AND 
                                                  contraseña_admin= '$contraseña' "; 

        $resultado=mysqli_query($conexion, $sql);   

        $cantidad_registros = mysqli_num_rows($resultado);  /* devuelve la cantidad de registros encontrados */

        /* si cantidad_registros = 1 entonces se deja ingresar al usuario porque esta registrado*/
        if($cantidad_registros != 0 ) {
            header("Location: ../pag_administrador/admin.php");
        }
        else {

            /*muestra la ventana emergente*/
            echo "<script>
                   alert('correo o contrasena incorrectos');
                   window.location='./frm_inicio_sesion_admin.php'
                 </script>";
       }
        /* si cantidad_registros = 0 entonces no se deja ingresar al usuario porque no esta registrado*/
    
        mysqli_free_result($resultado);
        mysqli_close($conexion); 
    
?>