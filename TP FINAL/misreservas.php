<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <script type="text/jscript">		
		function eliminarReserva(codReserva){
			var cod = codReserva;
			$('#codigoEliminar').val(cod);
			document.formEliminar.submit();
		}
	</script>
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
            <li> <a>
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
                    <li class="dropdown active">
							  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reservas <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="reserva.php">Reservar instalaciones</a></li>
								<li class="active"><a href="misreservas.php">Mis reservas</a></li>
              				  </ul>
                    </li> 
            		
					<?php } else{ ?>
            		
					<li class="active"><a href="disponibilidad.php">Ver disponibilidad</a></li>
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
                    <li><a href="administrador.php">Panel administrador</a></li>
             <?php } ?>
			 
          </ul>
        </div>
      </div>
    </nav>
	
	<div class="container" style="margin-top:55px">
      <div class="row row-centered">
          <div class="col-lg-6 col-centered">
	
		   
		   			<?php
					include("conexion.inc");
					$usuario=$_SESSION['usuario'];
					$vSql = "SELECT * FROM reservas WHERE usuario='$usuario'";
					$vResultado = mysqli_query($link,$vSql);
					$cantidadReservas=mysqli_num_rows($vResultado);
					if ($cantidadReservas>0)
					{
						echo("<h3>Estas son sus reservas actuales:</h3><br />");
						$vSql2= "SELECT * FROM clientes WHERE usuario='$usuario'";
						$vResultado2= mysqli_query($link,$vSql2); 
						?>
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="col">Día</th>
							  <th scope="col">Nombre y apellido</th>
							  <th scope="col">Estado</th>
							  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
							</tr>
						<?php
						$fila2= mysqli_fetch_array($vResultado2);
						while ($fila = mysqli_fetch_array($vResultado))
						{
							$fecha=$fila['dia'];
							$fechaordenada=substr($fecha, 8).'-'.substr($fecha,5 ,2).'-'.substr($fecha, 0, 4);
							?>
								<tr>
									<td><?php echo ($fechaordenada); ?></td>
									<td><?php echo ($fila2['nombre'].' '.$fila2['apellido']); ?></td>
									<td><?php echo ($fila['estado']); ?></td>
									<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
										<input type="button" class="btn btn-danger" value="Eliminar" onClick="javascript:eliminarReserva(<?php echo($fila['codigo'])?>);" />
									</td>
								</tr>
							<?php
						}
						mysqli_free_result($vResultado);
						mysqli_close($link);
					}
					else{
						echo("<h3> Usted no posee reservas actualmente</h3><br />");
						echo("<a href='reserva.php'>Ir a reservar instalaciones</a>");
					}
					?>
					  </tbody>
					</table>
					
		  </div>
	  </div>
	</div>
	<form class="hidden" action="eliminarReservaCli.php" id="formEliminar" name="formEliminar" method="post">
    	<input type="text" id="codigoEliminar" name="codigo" />
    </form>
	
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
