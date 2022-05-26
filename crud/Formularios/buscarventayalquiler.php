<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<!-- navbar-->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid" >
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
              <li><a class="dropdown-item" href="../Formularios/mostrarventayalquiler.php">Mostrar todos</a></li>
              <li><a class="dropdown-item" href="../Formularios/frm_venta_y_alquiler.php">Ingresar nuevo</a></li>
              <li><hr class="dropdown-divider"></li>
			  <li><a class="dropdown-item" href="./agendaventayalquiler.php">volver</a></li>
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
		<h1 style="margin-bottom= 20px"> Registros encontrados </h1>
		
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Fecha</th>
					<th>Documento Cliente</th>
					<th>Documento asesor</th>
					<th>Código del producto</th>
                    <th>Cantidad del producto</th>
                    <th>Valor total de la venta</th>
                    <th>Valor total del alquiler</th>
                    <th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    $sql = "SELECT * FROM `venta_y_alquiler` WHERE `doc_cliente` 
            LIKE '%$buscador%' OR `doc_admin` LIKE '%$buscador%';";
    $result=mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($result)){
  ?>
    <tr>
		<td> <?php echo $fila['id_venta'] ?> </td>
		<td> <?php echo $fila['fecha'] ?> </td>
		<td> <?php echo $fila['doc_cliente'] ?> </td>
		<td> <?php echo $fila['doc_admin'] ?> </td>
        <td> <?php echo $fila['id_producto'] ?> </td>
        <td> <?php echo $fila['cant_producto_venta_y_alquiler'] ?> </td>
        <td> <?php echo $fila['valor_venta'] ?> </td>
        <td> <?php echo $fila['valor_alquiler'] ?> </td>
		<td>
		<a href="<?='eliminarventayalquiler.php?id_venta='.($fila["id_venta"]) ?>". > 🚀Borrar</a>
		<a href="<?='editarventayalquiler.php?id_venta='.($fila["id_venta"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
	?>
		</table>
</center>

<?php require "../partes/footer.html" ?>