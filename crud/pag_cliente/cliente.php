<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<title>H&D CONSTRUEQUIPOS</title>
   
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet"> 


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="./codigo.js" ></script>
<script src="./jquery-3.3.1.min.js" ></script>
<link rel="shortcut icon" href="../CSS/img/Logo.png"> 


<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->

</head>
<body>

 
<!---------------------- Barra de navegación -------------------------->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid" style="background-color: rgb(223, 222, 222);">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mi cuenta
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="../Formularios/agendaUsuario.php">Editar perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../pag_principal/principal.php">Cerrar sesión</a></li>
              </ul>
            </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-danger" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>

<!--Inicio
<div class="card mb-1;  " style="margin-left: 10px; margin-right: 10px; margin-top: 5px; border-radius: 15px;">
    <img src="../CSS/img/inicioCliente.jpg" style="height: 480px" class="card-img-top; "  >
    <div class="card-body">
      <h5 class="card-title">Florencia, Caqueta</h5>
      <p class="card-text">Contactanos para obtener servicio personalizado</p>
      <p class="card-text"><small class="text-muted">H&D CONSTRUEQUIPOS</small></p>
    </div>
</div>
-->
<h4 style="text-align: center;">Bienvenido, aquí encontrarás más información</h4>
<div style = "text-align: center;">
  <img src="../CSS/img/inicio77.jpg" style="height:350px;" alt="">
</div> 

<!---------------------- Servicios --------------------------->

  <div class="servicios">
        <h1 style="text-align:left; font-size: 25px; margin-top: 15px; margin-left: 30px;"> Sobre nosotros </h1>
      <div class="card-group">
            <div class="card border-dark" style="width: 15%; margin-left: 10px; margin-top: 20px; text-align: center">
                <div class="card-header">Nuestros proveedores</div>
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
                <div class="card-header">Nuestros clientes</div>
                <div class="card-body text-dark">
                  <h5 class="card-title">Eficiencia</h5>
                  <p class="card-text">Nuestros clientes saben que son lo primero para nosotros, por ello confian en nuestros productos y servicios
                      por encima de otros competidores.
                  </p>
                </div>                
            </div> 
     </div>
  </div>

      

<!---------------------- Productos y Servicios 1 -------------------------->

<div style="margin-top: 40px" class="servicios">
  <h1 style="text-align:left; font-size: 25px; margin-top: 15px; margin-left: 30px;"> Nuestros productos </h1>
  <div class="card-group">
      <div class="card border-dark" style="width: 15%; margin-left: 10px; margin-top: 20px; text-align: center">
          <img src="../CSS/img/card2.jpeg" alt="">
      </div>
      <div class="card border-dark" style="width: 15%;  margin-top: 20px; text-align: center">
        <img src="../CSS/img/card3.jpeg" alt="">    
      </div>
      <div class="card border-dark" style="width: 15%; margin-top: 20px; margin-right: 10px; text-align: center">
        <img src="../CSS/img/card5.jpeg" alt="">
      </div>               
  </div>  
</div>

<!---------------------- Productos y Servicios 2 -------------------------->

<div style="margin-top: 30px" class="servicios">
  <div class="card-group">
      <div class="card border-dark" style="width: 15%; margin-left: 10px; margin-top: 20px; text-align: center">
          <img src="../CSS/img/card6.jpeg" alt="">
      </div>
      <div class="card border-dark" style="width: 15%;  margin-top: 20px; text-align: center">
        <img src="../CSS/img/card7.jpeg" alt="">    
      </div>
      <div class="card border-dark" style="width: 15%; margin-top: 20px; margin-right: 10px; text-align: center">
        <img src="../CSS/img/card1.jpeg" alt="">
      </div>               
  </div>  
</div>

<!---------------------- Formulario --------------------------->
<h1 style="text-align:center; font-size: 25px; margin-top: 50px; margin-left: 30px;"> Solicita asesoría </h1>
<div style="display: flex; align-items: center; margin-left: 325px; margin-bottom: 20px; margin-right: 325px; border-radius: 15px; border: 1px solid rgb(177, 177, 177); text-align: center; padding: 10px">
  <form action="#" method="post" style="width : 100%; margin:auto" class="row g-3 needs-validation" novalidate>
 <div class="row">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
    <div class="valid-feedback">
    </div>
    
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="validationCustom02" required>
    <div class="valid-feedback">
    </div>
  </div>
 </div>
    <div style="margin-top: 10px;" class="row">
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" id="validationCustom03" required>
        <div class="invalid-feedback">
         Ingresa un correo valido
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Tipo de solicitud</label>
        <select class="form-select" name="solicitud" id="validationCustom04" required>
          <option selected disabled value="">Seleccionar</option>
          <option>Asesoría en productos</option>
          <option>Asesoría en obras</option>
          <option>Asesoría en maquinaría</option>
        </select>
        <div class="invalid-feedback">
          Seleccciona el tipo de asesoría
        </div>
      </div>
    </div>
    <div class="mb-2">
      <label for="exampleFormControlTextarea1" class="form-label">Déjanos un mensaje</label>
      <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  
    <div class="col-12">
      <button class="btn btn-danger" type="submit">Enviar</button>
    </div>
  </form>
</div>

<!---------------------- Delimitador--------------------------->

<div style="margin-top:20px" class="servicios">
  <h1 style="text-align:left; font-size: 25px; margin-top: 15px; margin-left: 30px;"> Nuestros clientes son lo primero </h1>
  
      <div class="card" style="width: 100%; margin-top: 20px; margin-right: 10px; text-align: center">
          <div class="card-header" style = "background-color: rgb(114, 109, 109);"></div>
          <div class="card-body text-dark">
            <img src="../CSS/img/delimitador.png" alt="">
          </div>   
          <div class="card-header" style = "background-color: rgb(114, 109, 109); padding: 15px"></div>             
      </div> 
</div>

<!--info---->
<div class="card" 
style="margin-left: 10px; margin-right: 10px; margin-top: 5px; border-radius: 15px;">

  <div class="card-body">
  <h5 class="card-title">Florencia, Caquetá</h5>
      <p class="card-text">Contáctanos para obtener servicio personalizado</p>
      <p class="card-text">Teléfono: +57 322 387 7590</p>
      <p class="card-text">Correo electrónico: corporativo@h&dconstruequipos.net</p>
      <p class="card-text"><small class="text-muted">H&D CONSTRUEQUIPOS</small></p>
  </div>
</div>

</body>
<!-- Footer-->
<?php require "../partes/footerpp.html" ?>
<!-- Footer-->

</html>