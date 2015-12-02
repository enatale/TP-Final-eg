<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/js/validarModificacion.js"></script>
  </head>
  <body>
      <?php include'encabezado.php';?>
    
    <div class="container">
      <div class="row row-centered" style="text-align:center">
          <div class="col-lg-6 col-centered">
				<?php
				if(isset($_SESSION['usuario'])){
					include("conexion.inc");
					
					$usuario= $_POST['usuario'];
					$vSql = "Select * from clientes where usuario='$usuario'";
					$vResultado= mysqli_query($link, $vSql) or die(mysqli_error($link));
					$fila = mysqli_fetch_array($vResultado);
					?>
                    <form action="adminModificarUsuario.php" method="post" name="formModificar" id="formModificar"  >
                        <h1>Ingrese sus datos:</h1>
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" disabled
                        	value="<?php echo($fila['usuario']) ?>" required autofocus>
							
						<label class="hide" for="usuario">Usuario:</label>
                         <input type="text" id="usuario" name="usuario" class="form-control hide" placeholder="" 
                         	value="<?php echo($fila['usuario'])?>" required>	
							
							
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" 
                        	value="<?php echo($fila['nombre']) ?>" required>
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido"
                        	value="<?php echo($fila['apellido']) ?>" required>
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono"
                        	value="<?php echo($fila['telefono']) ?>" required>
                         <label class="hide" for="contrasena">Contraseña:</label>
                         <input type="password" id="contrasena" name="contrasena" class="form-control hide" placeholder="" 
                         	value="<?php echo($fila['contrasena'])?>" required>
                        <label for="pass_1">Nueva Contraseña (opcional):</label>
                        <input type="password" id="pass_1" name="pass_1" class="form-control" placeholder="Nueva Contraseña" required>
                        <label for="pass_2">Repita la nueva contraseña:</label>
                        <input type="password" id="pass_2" name="pass_2" class="form-control" placeholder="Repita la nueva contraseña" required>
                        <input type="button" name="modificar" class="btn btn-lg btn-success btn-block" style="margin-top:10px" id="Modificar" value="Modificar" onClick="javascript:enviar();">
                    </form>
					<p style="text-align:center; margin-top:5px"><a href="gestionarusuarios.php"> Volver a gestionar usuarios </a></p>
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

    
    <?php include'pie.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>