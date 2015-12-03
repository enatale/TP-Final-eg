<!DOCTYPE html>
<html style="background-image:none" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body style="background-image:none">
<?php
	session_start();
	if(isset($_SESSION['usuario'])&&$_SESSION['usuario']=='administrador'){
		include('adminEncabezado.php');?>
		 
	

    <div class="container">
        <div class="row row-centered">
            <div class="col-md-8 col-centered">
            	<?php
				$usuario= $_POST['usuario'];
				$contrasena= $_POST['contrasena'];
				$nombre= $_POST['nombre'];
				$apellido= $_POST['apellido'];
				$telefono= $_POST['telefono'];
				$email = $_POST['email'];
                
				include("conexion.inc");
				$vSql = "SELECT Count(usuario) FROM clientes WHERE usuario='$usuario'";		
                $vResultado = mysqli_query($link,$vSql) or die (mysqli_error($link));		
                $vCantUsuarios = mysqli_fetch_row($vResultado);	
                if ($vCantUsuarios[0] != 0){
                 echo ("<h1>El usuario ya existe<br></h1>");
                 echo ("<a href='adminRegistrar.php'>Volver al registro</a>");
                }
                else {
					$vSql = "INSERT INTO clientes (usuario, contrasena, nombre, apellido, telefono, email)
					values ('$usuario', '$contrasena', '$nombre', '$apellido', '$telefono', '$email')";
					mysqli_query($link,$vSql) or die (mysqli_error($link));
					echo("<h1>El Usuario fue registrado correctamente<br></h1>");
					echo ("<a href='adminRegistrar.php'>Registrar otro usuario</a>");
                }
                mysqli_close($link);
                ?>
            </div>
        </div>
    </div>

    <?php }
		else {
			echo('<h1 style="color:red;text-align:center"> PARA VER ESTA PÁGINA DEBE ESTAR LOGUEADO COMO ADMINISTRADOR</h1>');
		}
	?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
