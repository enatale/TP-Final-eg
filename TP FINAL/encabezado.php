<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
				<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a style="margin:0px; padding:0px" class="navbar-brand" href="index.php"><img style="height:100%" src="imagenes/logo.jpg" alt="Logo"></a>
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
									</a>
								</li>
							  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Inicio</a></li>
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
							<li><a href="modificarcuenta.php">Modificar cuenta</a></li>
							<li><a href="cerrarsesion.php">Cerrar sesión</a></li>
							<?php } else{ ?>
							<li><a href="iniciarsesion.php">Inciar sesión</a></li>
					 <?php } ?>
				  </ul>
			   </div>
		
       </div>
</nav>