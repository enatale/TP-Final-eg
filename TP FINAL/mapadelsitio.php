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
           <div class="col-lg-6 col-centered">   
		      <h1 class="text-center">Mapa del sitio:</h1>
              <li><a href="index.php">Inicio</a></li>
			  <li><a href="galeria.php">Galería</a></li>
					   <?php if(isset($_SESSION['usuario'])){ ?>
							<li>Reservas:</li> 
							<li style="margin-left:30px"><a href="reserva.php">Reservar instalaciones</a></li>
							<li style="margin-left:30px"><a href="misreservas.php">Mis reservas</a></li>
							
							<?php } else{ ?>
							<li><a href="disponibilidad.php">Ver disponibilidad</a></li>
					 <?php } ?>
			  <li><a href="ubicacion.php">Ubicación</a></li>
			  <li><a href="nuestracomision.php">Nuestra comisión</a></li>
			  <li><a href="contacto.php">Contacto</a></li>
					<?php if(isset($_SESSION['usuario'])){ ?>
							<li><a href="modificarcuenta.php">Modificar cuenta</a></li>
							<li><a href="cerrarsesion.php">Cerrar sesión</a></li>
							<?php } else{ ?>
							<li><a href="iniciarsesion.php">Inciar sesión</a></li>
					 <?php } ?>
              <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
              <li><a href="news.php">Suscripcion al boletín de noticias</a></li>
           </div>     
        </div>
    </div>
    <?php include'pie.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
