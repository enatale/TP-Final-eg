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
				if(isset($_SESSION['usuario'])){
					include("conexion.inc");
					extract($_POST);
					$usuario= $_POST['usuario'];
					$nombre= $_POST['nombre'];
					$apellido= $_POST['apellido'];
					$contrasena= $_POST['contrasena'];
					$telefono= $_POST['telefono'];
					$email = $_POST['email'];
					
					$vSql = "Update clientes set nombre='$nombre', apellido = '$apellido', contrasena = '$contrasena', telefono = '$telefono', email='$email' where usuario = '$usuario'";
					if(mysqli_query($link, $vSql)){
						echo('<h1 style="text-align:center"> Las modificaciones se realizaron con éxito</h1><br />');
					}
					else{
						echo('<h1 style="color:red; text-align:center"> Error al actualizar información en la base de datos</h1><br />');
					}
					echo('<p style="text-align:center"><a href="gestionarusuarios.php"> Volver </a></p>');
					mysqli_close($link);			
				} else {
					echo('<h1 style="color:red"> DEBE ESTAR LOGUEADO COMO ADMINISTRADOR PARA VER ESTA PÁGINA</h1>');
				}
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