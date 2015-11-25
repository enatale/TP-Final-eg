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
					if(isset($_POST['usuario'])){
						extract($_POST);
						include("conexion.inc");
						/////////////////////////TRANSACCION SQL/////////////////////////////
						$vSql = "SET AUTOCOMMIT=0;";
						mysqli_query($link, $vSql);
						$vSql = "Delete from reservas where usuario = '$usuario'";
						$vResultado = mysqli_query($link, $vSql);
						if($vResultado){
							$vSql = "Delete from clientes where usuario = '$usuario'";
							$vResultado = mysqli_query($link, $vSql);
							if($vResultado){
								$vSql = "commit;";
								mysqli_query($link, $vSql);
							}
							else{
								$vSql = "rollback;";
							    mysqli_query($link, $vSql);
							}
						}
						else{
							$vSql = "rollback;";
							mysqli_query($link, $vSql);
						}
						$vSql = "SET AUTOCOMMIT=1;";
						mysqli_query($link, $vSql);

						////////////////////////////////////////////////////////////////////
						header('Location: gestionarusuarios.php');
					} else {?>
                    	<h3 style="color:#FF0004">Error en el envío de datos</h3>
                        <a href='gestionarusuarios.php'>Volver atrás</a>
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