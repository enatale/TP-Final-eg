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
        <div class="row row-centered" style="text-align:center">
            <div class="col-lg-6 col-centered">
            	<?php
					if(isset($_POST['codigo'])){
						extract($_POST);
						include("conexion.inc");
						$vSql = "Delete from reservas where codigo = '$codigo'";
						mysqli_query($link, $vSql) or die(mysqli_error($link));
						header('Location: gestionarreservas.php');
					} else {?>
                    	<h1 style="color:#FF0004">Error en el envío de datos</h1>
                        <a href='gestionarreservas.php'>Volver atrás</a>
                        <?php
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
