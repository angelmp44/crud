<?php 
    $conexion = new mysqli("localhost", "root", "", "construequipos") 
                or die("not connected".mysqli_connect_error());
?> 
<link href="../CSS/style_agendas.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<!---------------------- Header-------------------------->

<?php require "../partes/header.html" ?>

<!---------------------- Header-------------------------->

<center>
		
		<h1 style="margin-bottom: 50px;"> Usuario encontrado </h1>
		<a href="../Formularios/agendaUsuario.php" class="btn btn-light" >Volver</a>
        <br>
        <br>
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Acciones</th>
				</tr>
			</thead>
  <?php
    $buscador = $_GET['buscador'];
    if(empty($buscador)){
        echo "<script>
                    alert('Ingresa un nombre válido');
                    window.location='./agendaUsuario.php'
              </script>";
    }
    else{
        $sql = "SELECT * FROM `usuario` WHERE `nombre_usuario` 
        LIKE '%$buscador%' ";
        $result=mysqli_query($conexion,$sql);
        while($fila=mysqli_fetch_array($result)){
    
   
  ?>
    <tr>
		<td> <?php echo $fila['id_usuario'] ?> </td>
		<td> <?php echo $fila['nombre_usuario'] ?> </td>
		<td> <?php echo $fila['correo_usuario'] ?> </td>
        
		<td>
		<a href="<?='editarUsuario.php?id_usuario='.($fila["id_usuario"]) ?>". > ✒️Editar</a>
		</td>
	  </tr>
	<?php
	}
    }
	?>
		</table>
		</center> 


<?php require "../partes/footerpp.html" ?>