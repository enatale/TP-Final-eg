<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="margin:0px; padding:0px" class="navbar-brand" href="index.html"><img style="height:100%" src="imagenes/logo.jpg" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
            <li><a>
            	<?php
				session_start(); 
				if(isset($_SESSION['usuario'])){
						$nombreSesion = $_SESSION['nombre'];
						$apellidoSesion = $_SESSION['apellido'];
						echo('Bienvenido '.$nombreSesion.' '.$apellidoSesion);
				}?> 
            </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="index.html">Inicio</a></li>
            <li><a href="galeria.php">Galería</a></li>
			  <?php if(isset($_SESSION['usuario'])){ ?>
                    <li class="dropdown">
							  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="reserva.php">Reservar instalaciones</a></li>
								<li><a href="misreservas.php">Mis reservas</a></li>
              				  </ul>
                    </li> 
            		
					<?php } else{ ?>
            		
					<li><a href="disponibilidad.php">Ver disponibilidad</a></li>
             <?php } ?>
	   
            <li><a href="ubicacion.php">Ubicación</a></li>
            <li><a href="nuestracomision.php">Nuestra comisión</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php if(isset($_SESSION['usuario'])){ ?>
            		<li><a href="cerrarsesion.php">Cerrar sesión</a></li>
            		<?php } else{ ?>
            		<li><a href="iniciarsesion.php">Inciar sesión</a></li>
             <?php } ?>
			   <?php if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='administrador'){ ?>
                    <li class="dropdown">
							  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel administrador <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="gestionarusuarios.php">Gestionar usuarios</a></li>
								<li><a href="gestionarreservas.php">Gestionar reservas</a></li>
              				  </ul>
                    </li>
             <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container style="margin-top:55px"">
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
							echo("<h3> Usuario y/o contraseña incorrecto/s </h3><br />");
							echo("<h3> Usuario y/o contraseña incorrecto/s </h3><br /><a href='iniciarsesion.php'>Volver a inicio de sesión</a>");
						}
					}
					else{
						echo("<h3>Error al pasar datos desde el formulario</h3><br />");
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
























