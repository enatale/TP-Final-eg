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
            <li class="active"><a href="nuestracomision.php">Nuestra comisión</a></li>
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
    <div class="container" style="margin-top:55px">    
        <div class="row row-centered">
            <div class="col-md-6 col-centered"><h3 style="text-align:center"><label >Estos son los integrantes de nuestra comisión:</label></h3></div> 
        </div>        
        <div class="row row-centered" >
            <div class="col-md-6 col-centered">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Cargo</th>
                    <th>Nombre y Apellido</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Presidente</td>
                    <td>Primo Enrique Giacomozzi</td>
                  </tr>
                  <tr>
                    <td>Vice-Presidente 1°</td>
                    <td>Abel José Cuccioletta</td>
                  </tr>
                  <tr>
                    <td>Vice-Presidente 2°</td>
                    <td>Emilio Alberto Marozzi</td>
                  </tr>
                  <tr>
                    <td>Secretario</td>
                    <td>Osvalo Stroppiana</td>
                  </tr>
                  <tr>
                    <td>Pro-secretario</td>
                    <td>Daniel Eldo Sfrédola</td>
                  </tr>
                  <tr>
                    <td>Tesorero</td>
                    <td>Osvaldo Vicente Screpanti</td>
                  </tr><tr>
                    <td>Pro-tesorero</td>
                    <td>Higinio Agustín Fagiani</td>
                  </tr>
                  <tr>
                    <td rowspan="8">Vocales titulares</td>
                    <td>Adrían Fernando Leporatti</td>
                  </tr>
                  <tr>
                    <td>Jorge Omar Gabrieli</td>
                  </tr>
                  <tr>
                    <td>Gustavo Arsenio Sanmarti</td>
                  </tr>
                  <tr>
                    <td>Miguel Ángel Mandolesi</td>
                  </tr>
                  <tr>
                    <td>Sergio Félix Quacquarini</td>
                  </tr>
                  <tr>
                    <td>Julio Gofiar</td>
                  </tr>
                  <tr>
                    <td>Raúl José Caffaratti</td>
                  </tr>
                  <tr>
                    <td>Rubén Gregorio Zamora</td>
                  </tr>
                  <tr>
                    <td rowspan="4">Vocales Suplentes</td>
                    <td>César Luis Quiroga</td>
                  </tr>
                  <tr>
                    <td>Guillermo Hernán Foco</td>
                  </tr>
                  <tr>
                    <td>Raúl Alberto Giachetta</td>
                  </tr>
                  <tr>
                    <td>Elsa Noemi Rafaelli</td>
                  </tr>
                  <tr>
                    <td rowspan="3">Síndicos titulares</td>
                    <td>José Alberto S. Quacquarini</td>
                  </tr>
                  <tr>
                    <td>Luis Nazareno Callarelli</td>
                  </tr>
                  <tr>
                    <td>Juan Exequiel Marcetti</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Síndicos suplentes</td>
                    <td>Elbio Alberto Giacomozzi</td>
                  </tr>
                  <tr>
                    <td>Enzo Dichiara</td>
                  </tr>
                  
                  
                  
        
                </tbody>
              </table>
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
