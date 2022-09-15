<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia tu contraseña</title>


    <h4 >
    <p style="text-align:center; margin-top: 20px;">Cambia tu contraseña</p>
    </h4>

<?php

// conectarse a la bd
require "../conexion.php";
$objConexion = conectarse();

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

if($cantidad_registros == 0){
  echo "<script>
  alert('No se ha podido encontrar esta pagina, solicita un nuevo codigo');
  window.location='./passwordRecover.php';
      </script>";
}

?>


<form action = "<?='changePassword.php?codigo='.($codigo)?>" method = "post" class="row g-3" 
style="justify-content: center; margin-top : 20px ; width: 20%; margin: auto;">

  <div class="row-auto">
  <p style="text-align:center; margin-top: 20px;">Nueva contraseña </p>
    <input type="password" name="contraseña1" class="form-control"  >
  </div>
  <div class="row-auto">
  <p style="text-align:center; margin-top: 20px;">Repite la contraseña </p>
    <input type="password" name="contraseña2" class="form-control" >
  </div>
   <div class="row-auto" Style = " display: flex; justify-content: center;">
    <button type="submit"  class="btn btn-danger mb-3">Aceptar</button>
  </div>
</form>