<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
   <?php include'encabezado.php';?>
    
    <div class="container">
    	<div class="row row-centered">
        	<div class="col-md-6 col-centered">
            	<?php
					if(isset($_POST['usuario'])){
						$usuario= $_POST['usuario'];
						$email = $_POST['email'];					
						include('conexion.inc');						
						$consulta = "Select * from clientes where usuario = '$usuario' and email = '$email'";
						$resultado = mysqli_query($link, $consulta) or die(mysqli_error($link));
						$cantidad = mysqli_num_rows($resultado);
						if($cantidad==1){
							$fila= mysqli_fetch_array($resultado);
					        $contra= $fila['contrasena'];
							$fecha=date("d-m-Y");
                            $hora=date("H :i:s");
                            $destinatario= $fila['email'];
		
                            $remitente='From: '."info@sociedaditaliana.96.lt";
                            $cuerpo=" Usted ha solicitado su contraseña. La misma es:\n
									  $contra
                                    ";
                            $asunto="Contraseña olvidada; Socidad Italiana de Pujato";
							
                            if(mail($destinatario,$asunto,$cuerpo,$remitente)){
                  				echo("<h1>Su contraseña ha sido enviada a su correo, por favor revíselo</h1>");
							}
							else{
                  				echo('<h1 style="color:red">Error al enviar e-mail, vuelva a intentarlo.</h1><br/><a href="olvidocontra.php">Volver</a>');
							}
							
						} else{							
							echo("<h1> El usuario no existe o no coincide con el e-mail ingresado</h1><br/><a href='olvidocontra.php'>Volver</a>");
						}
					mysqli_free_result($resultado);
					mysqli_close($link);
					}
					else{
						echo("<h1>Error al pasar datos desde el formulario</h1><br />");
						echo("<a href='olvidocontra.php'>Volver</a>");
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