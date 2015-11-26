<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <?php include'encabezado.php';?>
    
    <div class="container">
    	<div class="row row-centered">
        	<div class="col-md-6 col-centered">
            	<?php
					if(isset($_POST['usuario'])){
						$usuario= $_POST['usuario'];
						$contrasena = $_POST['contraseña'];
						
						include('conexion.inc');
						
						$consulta = "Select * from clientes where usuario = '$usuario' and contrasena = '$contrasena'";
						$resultado = mysqli_query($link, $consulta) or die(mysqli_error($link));
						$cantidad = mysqli_num_rows($resultado);
						if($cantidad==1){
							$fila= mysqli_fetch_array($resultado);
					
							$_SESSION['usuario'] = $fila['usuario'];
							$_SESSION['nombre'] = $fila['nombre'];
							$_SESSION['apellido'] = $fila['apellido'];
							mysqli_free_result($resultado);
							mysqli_close($link);
							header('Location: reserva.php');
						}
						else{
							//echo("<h3> Usuario y/o contraseña incorrecto/s </h3><br />");
							echo("<h1> Usuario y/o contraseña incorrecto/s </h1><br /><a href='iniciarsesion.php'>Volver a inicio de sesión</a>");
						}
					}
					else{
						echo("<h1>Error al pasar datos desde el formulario</h1><br />");
						echo("<a href='iniciarsesion.php'>Volver a inicio de sesión</a>");
					}
					mysqli_free_result($resultado);
					mysqli_close($link);
				?>
            </div>
        </div>
    </div>
    
    
    <footer class="footer navbar-fixed-bottom">
      <div class="container">
        <p class="text-muted">Sociedad Italiana de Pujato General Armando Díaz - Dirección: J.R. Rodríguez 448 - Pujato, Santa Fe, Argentina - Telefono: (03464)-494636</p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
























