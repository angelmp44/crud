<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<title>H&D CONSTRUEQUIPOS</title>
   
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="shortcut icon" href="../CSS/img/Logo.png"> 


<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->

</head>


<body>


 
<!---------------------- Barra de navegación -------------------------->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Inicio Sesión Cliente
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="../Formularios/frm_inicio_sesion_usuario.php">Tengo una cuenta</a></li>
                  <li><a class="dropdown-item" href="../Formularios/frm_registro_usuario.php">Registrarse</a></li>

                  
                </ul>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Inicio Sesión Administrador
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="../Formularios/frm_inicio_sesion_admin.php">Tengo una cuenta</a></li>
                    <li><a class="dropdown-item" href="../Formularios/frm_registro_administrador.php">Registrarse</a></li>
                  </ul>
                </li>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-danger" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>

<!--Inicio-->
<div class="card mb-3;  " style="margin-left: 10px; margin-right: 10px; margin-top: 5px; border-radius: 15px;" >
    <img src="../CSS/img/inicio77.jpg" class="card-img-top;"   >
    <div class="card-body">
      <h5 class="card-title">Florencia, Caqueta</h5>
      <p class="card-text">Contactanos para obtener servicio personalizado</p>
      <p class="card-text"><small class="text-muted">H&D CONSTRUEQUIPOS</small></p>
    </div>
</div>

<!---------------------- Servicios --------------------------->

    <div class="servicios">
        <h1 style="text-align:left; font-size: 25px; margin-top: 15px; margin-left: 30px;"> Frecuentes </h1>
        <div class="card-group">
            <div class="card border-dark" style="width: 15%; margin-left: 10px; margin-top: 20px; text-align: center">
                <div class="card-header">Sobre nuestros proveedores</div>
                <div class="card-body text-dark">
                  <h5 class="card-title">Calidad</h5>
                  <p class="card-text">
                      Nuestros productos son de la mejor calidad, por ello todos nuestros proveedores estan
                      certificados lo que garantiza un exelente rendimiento de los mismos.
                  </p>
                </div>
            </div>
            <div class="card border-dark" style="width: 15%;  margin-top: 20px; text-align: center">
                <div class="card-header">Envios</div>
                <div class="card-body text-dark">
                  <h5 class="card-title">Confiabilidad</h5>
                  <p class="card-text">Garantizamos la llegada de sus productos a la puerta de su casa o empresa</p>
                </div>
            </div>
            <div class="card border-dark" style="width: 15%; margin-top: 20px; margin-right: 10px; text-align: center">
                <div class="card-header">Sobre nuestros clientes</div>
                <div class="card-body text-dark">
                  <h5 class="card-title">Eficiencia</h5>
                  <p class="card-text">Nuestros clientes saben que son lo primero para nosotros, por ello confian en nuestros productos y servicios
                      por encima de otros competidores.
                  </p>
                </div>

                            
        </div>  

            </div>
          </div>
  </div>
       
              
         
        </div>



<!---------------------- Pie de página --------------------------->



</body>
<!-- Footer-->
<?php require "../partes/footerpp.html" ?>
<!-- Footer-->
</html>