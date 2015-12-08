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
        	<div class="col-md-10 col-centered">
				<?php
				if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='administrador'){	
					if(isset($_POST['noticia'])){
						$noticia = $_POST['noticia'];
						$asunto = $_POST['asunto'];
						include('conexion.inc');
						$sql = "Select * from mailboletin";
						$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
						$cantidad = mysqli_num_rows($resultado);
						if($cantidad==0){
							echo('<h1 style="color:red">No se encontraron suscriptores</h1>');
						} else {
							$destinatario= "";
                            $remitente='From:' .'info@sociedaditaliana.96.lt';
							while ($fila= mysqli_fetch_array($resultado)){
								$destinatario.= $fila['direccion'] . ', ';
							}
							if(mail($destinatario,$asunto,$noticia,$remitente)){
								echo('<h1>El boletín de noticias se ha enviado correctamente</h1></br><a href="adminBoletinNoticias.php">Volver</a>');
							} else {
								echo('<h1 style="color:red">Error al enviar mail</h1></br><a href="adminBoletinNoticias.php">Vuelva a intentarlo</a>');
							}
						}
						mysqli_free_result($resultado);
						mysqli_close($link);
					} else {
						echo('<h1 style="color:red"> Error en el envío de datos</h1></br><a href="adminBoletinNoticias.php">Vuelva a intentarlo</a>');
					}
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
