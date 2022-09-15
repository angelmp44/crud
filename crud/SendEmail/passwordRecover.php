<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
</head>
<body>
    <h4 >
    <p style="text-align:center; margin-top: 20px;">Recupera tu contraseña</p>
    </h4>


<form action="mail.php" method = "post" class="row g-2" style="justify-content: center; margin-top : 20px ;">
  <div class="col-auto">
  <p style="text-align:center; margin-top: 20px;">Ingresa tu correo </p>
    <input type="email" name="correo" class="form-control"  placeholder = "correo@correo.com">
  </div>
   <div class="row-auto" Style = " display: flex; justify-content: center;">
    <button type="submit"  class="btn btn-danger mb-3">Aceptar</button>
  </div>
</form>

</body>
</html>