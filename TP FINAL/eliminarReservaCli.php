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
						header('Location: misreservas.php');
					} else {?>
                    	<h3 style="color:#FF0004">Error en el envío de datos</h3>
                        <a href='misreservas.php'>Volver atrás</a>
                        <?php
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
