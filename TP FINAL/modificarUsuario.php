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
      <div class="row row-centered" style="text-align:center">
          <div class="col-lg-6 col-centered">
				<?php
				if(isset($_SESSION['usuario'])){
					include("conexion.inc");
					extract($_POST);
					$usuario= $_SESSION['usuario'];
					$vSql = "Update clientes set nombre='$nombre', apellido = '$apellido', contrasena = '$contrasena', telefono = '$telefono' where usuario = '$usuario'";
					if(mysqli_query($link, $vSql)){
						echo('<h1 style="text-align:center"> Las modificaciones se realizaron con éxito</h1><br />');
					}
					else{
						echo('<h1 style="color:red; text-align:center"> Error al actualizar información en la base de datos</h1><br />');
					}
					echo('<p style="text-align:center"><a href="modificarcuenta.php"> Volver </a></p>');
					mysqli_close($link);
					$_SESSION['usuario'] = $usuario;
					$_SESSION['apellido'] = $apellido;
					$_SESSION['nombre'] = $nombre;				
				} else {
					echo('<h1 style="color:red"> DEBE ESTAR LOGUEADO PARA VER ESTA PÁGINA</h1>');
				}
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