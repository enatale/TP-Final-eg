<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/validarRegistro.js"></script>    
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
            <li><a href="galeria.php">Galería</a></li>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="reserva.php">Reservar instalaciones</a></li>
                <li><a href="misreservas.php">Mis reservas</a></li>
              </ul>
            </li>
            <li><a href="ubicacion.php">Ubicación</a></li>
            <li><a href="nuestracomision.php">Nuestra comisión</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <?php if(isset($_SESSION['usuario'])){ ?>
                    <li><a href="modificarcuenta.php">Modificar cuenta</a></li>
            		<li><a href="cerrarsesion.php">Cerrar sesión</a></li>
            		<?php } else{ ?>
            		<li class="active"><a href="iniciarsesion.php">Inciar sesión</a></li>
             <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    
    
    <div class="container" style="margin-top:55px">
      <div class="row row-centered">
          <div class="col-lg-6 col-centered">
          <form action="altausuario.php" method="post" name="formRegistro" id="formRegistro"  >
            <h2>Ingrese sus datos:</h2>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" id="pass_1" name="contrasena" class="form-control" placeholder="Contraseña" required>
            <input type="password" id="pass_2" name="contrasena2" class="form-control" placeholder="Repita la contraseña" required>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required>
            <input type="button" name="registrar" class="btn btn-lg btn-success btn-block" style="margin-top:10px" id="registrar" value="Registrar" onClick="javascript:enviar();">

          </form>
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
