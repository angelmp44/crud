<?php
$conexion = new mysqli("localhost", "root", "", "construequipos") 
or die("not connected".mysqli_connect_error());


$buscador = $_GET['buscador'];

if($buscador == "Clientes" || $buscador == "clientes"){
    echo "<script>
    window.location='./agendaclientes.php'
        </script>";
}
else if($buscador == "Productos" || $buscador == "productos"){
    echo "<script>
    window.location='./agendaproductos.php'
        </script>";
}
else if($buscador == "Ventas" || $buscador == "ventas"){
    echo "<script>
    window.location='./agendaventayalquiler.php'
        </script>";
}
else if($buscador == "Proveedores" || $buscador == "proveedores"){
    echo "<script>
    window.location='./agendaproveedor.php'
        </script>";
}
else if($buscador == "compras" || $buscador == "Compras"){
    echo "<script>
    window.location='./agendacompraproveedor.php'
        </script>";
}
else if($buscador == "Envios" || $buscador == "envios" || $buscador == "Envíos" || $buscador == "envíos"){
    echo "<script>
    window.location='./agendaenvioventa.php'
        </script>";
}
else{
    echo "<script>
    alert('Ingresa una opción válida');
    window.location='../pag_administrador/admin.php'
        </script>";
}
?>