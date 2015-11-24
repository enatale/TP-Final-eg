<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/validarModificacion.js"></script>
  </head>
  <body>
      	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a style="margin:0px; padding:0px" class="navbar-brand" href="index.html"><img style="height:100%" src="imagenes/logo.jpg" alt=""></a>
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
        </div>
        <div>
           
          </ul>
        </div>
      </div>
    </nav>
    <nav id="segundaBarra" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
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
            		<li class="active"><a href="modificarcuenta.php">Modificar cuenta</a></li>
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
    
    <div class="container" style="margin-top:100px">
      <div class="row row-centered" style="text-align:center">
          <div class="col-lg-6 col-centered">
				<?php
				if(isset($_SESSION['usuario'])){
					include("conexion.inc");
					$usuario= $_SESSION['usuario'];
					$vSql = "Select * from clientes where usuario='$usuario'";
					$vResultado= mysqli_query($link, $vSql) or die(mysqli_error($link));
					$fila = mysqli_fetch_array($vResultado);
					?>
                    <form action="modificarUsuario.php" method="post" name="formModificar" id="formModificar"  >
                        <h2>Ingrese sus datos:</h2>
                        
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" disabled
                        	value="<?php echo($fila['usuario']) ?>" required autofocus>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" 
                        	value="<?php echo($fila['nombre']) ?>" required>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido"
                        	value="<?php echo($fila['apellido']) ?>" required>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono"
                        	value="<?php echo($fila['telefono']) ?>" required>
                         <input type="password" id="contrasena" name="contrasena" class="form-control hide" placeholder="" 
                         	value="<?php echo($fila['contrasena'])?>" required>
                        <input type="password" id="pass_1" name="pass_1" class="form-control" placeholder="Nueva Contraseña" required>
                        <input type="password" id="pass_2" name="pass_2" class="form-control" placeholder="Repita la nueva contraseña" required>
                        <input type="button" name="modificar" class="btn btn-lg btn-success btn-block" style="margin-top:10px" id="Modificar" value="Modificar" onClick="javascript:enviar();">
                    </form>
                    <?php
					mysqli_free_result($vResultado);
					mysqli_close($link);
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
