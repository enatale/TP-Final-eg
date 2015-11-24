<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/jscript">
			
		function eliminarCliente(nombreUsuario){
			$('#usuario').val(nombreUsuario);
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
            		<li><a href="iniciarsesion.php">Inciar sesión</a></li>
             <?php } ?>
             <?php if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='administrador'){ ?>
                    <li class="dropdown active">
							  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panel administrador <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li class="active"><a href="gestionarusuarios.php">Gestionar usuarios</a></li>
								<li><a href="gestionarreservas.php">Gestionar reservas</a></li>
              				  </ul>
                    </li>
             <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    
<div class="container" style="margin-top:55px">
      <div class="row row-centered" style="text-align:center">
          <div class="col-lg-6 col-centered">
				<?php
				if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='administrador'){
					include("conexion.inc");
					
					$Cant_por_Pag = 5;
					
					$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
					if (!$pagina) {
						$inicio = 0;
						$pagina=1;
					}
					else {
						$inicio = ($pagina - 1) * $Cant_por_Pag;
					}
					$vSql = "SELECT * FROM clientes";
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					$total_paginas = ceil($total_registros/ $Cant_por_Pag);
					echo ("<h5 style='text-align:center'>Mostrando la página " . $pagina . " de " . $total_paginas . "</h5>");
					
					$vSql = "SELECT * FROM clientes order by apellido asc limit " . $inicio . "," . $Cant_por_Pag;
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					
					?>
					<table class="table table-bordered">
					  <tbody>
						<tr>
						  <th scope="col">Apellido</th>
						  <th scope="col">Nombre</th>
						  <th scope="col">Teléfono</th>
						  <th scope="col">Usuario</th>
						  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
						</tr>
					<?php
					while ($fila = mysqli_fetch_array($vResultado))
					{
					?>
						<tr>
							<td><?php echo ($fila['apellido']); ?></td>
							<td><?php echo ($fila['nombre']); ?></td>
							<td><?php echo ($fila['telefono']); ?></td>
							<td><?php echo ($fila['usuario']); ?></td>
							<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
								<input type="button" class="btn btn-danger" value="ELIMINAR" onClick="javascript:eliminarCliente('<?php echo ($fila['usuario']) ?>');S" />
							</td>
						</tr>
					<?php
					}
					mysqli_free_result($vResultado);
					mysqli_close($link);
					?>
					  </tbody>
					</table>
					<?php
					if ($total_paginas > 1){?>
						<p style="text-align:center"> <?php
						for ($i=1;$i<=$total_paginas;$i++){
							if ($pagina == $i) echo $pagina . " ";
							else echo "<a href='gestionarusuarios.php?pagina=" . $i ."'>" . $i . "</a> ";
						}
						?> </p> <?php
					}
				} else {
					echo('<h1 style="color:red"> DEBE ESTAR LOGUEADO COMO ADMINISTRADOR PARA VER ESTA PÁGINA</h1>');
				}
                ?>
          </div>
      </div>
     </div>

    <form class="hidden" action="eliminarCliente.php" id="formEliminar" name="formEliminar" method="post">
    	<input type="text" id="usuario" name="usuario" />
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
