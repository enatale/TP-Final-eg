<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="margin:0px; padding:0px" class="navbar-brand" href="#"><img style="height:100%" src="imagenes/logo.jpg" alt=""></a>
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
            <li class="active"><a href="">Galería</a></li>
            
            
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
                    <li><a href="modificarcuenta.php">Modificar cuenta</a></li>
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
        <div id="galeria" class="container">
            <div id="galeria_imagen"><img class="img-responsive" id="imgGaleria" src="imagenes/galeria/fachada1.jpg" /></div>
            <div id="galeria_miniaturas">
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada1.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada2.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal1.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal2.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal3.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Baños1.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Baños2.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina1.jpg" />
                <img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina2.jpg" />
            </div>
        </div>
    
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Sociedad Italiana de Pujato General Armando Díaz - Dirección: J.R. Rodríguez 448 - Pujato, Santa Fe, Argentina - Telefono: (03464)-494636</p>
      </div>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
