<?php

        $conexion = mysqli_connect("localhost", "root", "", "construequipos");

        $correo= $_POST["correo"]; 
        $contraseña = $_POST["contraseña"]; 
       
        $sql = "SELECT * FROM usuario WHERE correo_usuario= '$correo' AND 
                                                  contraseña_usuario= '$contraseña' "; 

        $resultado=mysqli_query($conexion, $sql);  

        $cantidad_registros = mysqli_num_rows($resultado);  /* devuelve la cantidad de registros encontrados */

        /* si cantidad_registros = 1 entonces se deja ingresar al usuario porque esta registrado*/
        if($cantidad_registros != 0 ) {
            header("Location: ../pag_cliente/cliente.php");
        }
        else {

             /*muestra la ventana emergente*/
             echo "<script>
                    alert('Correo o contrasena incorrectos');
                    window.location='./frm_inicio_sesion_usuario.php'
                  </script>";
        }
      
        /* si cantidad_registros = 0 entonces no se deja ingresar al usuario porque no esta registrado*/
       
        mysqli_free_result($resultado);
        mysqli_close($conexion); 

        
    
?>