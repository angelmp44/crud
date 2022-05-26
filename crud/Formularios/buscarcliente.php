<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?>

<!-- navbar-->
<nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid" style = "background-color:  rgb(223, 222, 222); padding : 10px">
      <a class="navbar-brand" href="#">H&D Construequipos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="../Formularios/mostrarcliente.php">Mostrar todos</a></li>
              <li><a class="dropdown-item" href="../Formularios/frm_cliente.php">Ingresar nuevo</a></li>
              <li><hr class="dropdown-divider"></li>
			        <li><a class="dropdown-item" href="./agendaclientes.php">volver</a></li>
              <li><a class="dropdown-item" href="../pag_administrador/admin.html">Salir</a></li>
            </ul>
          </li>
        </ul>	
      </div>
    </div>
</nav>
<!-- navbar-->

<center>
  <br>
        <h1 style="margin-bottom = 20px">Clientes encontrados </h1>
        
  <table  class="table">
  <tr>
		<th>Documento del Cliente</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Teléfono</th>
		<th>Email</th>
		<th>Dirección</th>
        <th>Acciones</th>
    </tr>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `cliente` WHERE `nombre_cliente` 
            LIKE '%$buscador%' OR `apellido_cliente` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
    <td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['nombre_cliente'] ?> </td>
		<td> <?php echo $fila['apellido_cliente'] ?> </td>
		<td> <?php echo $fila['tel_cliente'] ?> </td>
		<td> <?php echo $fila['correo_cliente'] ?> </td>
        <td> <?php echo $fila['direccion_cliente'] ?> </td>
		<td>
        <a href="<?='eliminarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > 🚀Borrar</a>
	    <a href="<?='editarcliente.php?doc_cliente='.($fila["doc_cliente"]) ?>". > ✒️Editar</a>
      </td>      
    </tr>

  <?php 
  }
   ?>
  </table>
</center>

<?php require "../partes/footer.html" ?>