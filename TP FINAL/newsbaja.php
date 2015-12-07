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
          <div class="col-lg-6 col-centered text-center">
			    <?php            
				include("conexion.inc");
				$mail=$_POST['emailb'];
				$vSql = "DELETE FROM mailboletin WHERE direccion='$mail'";		
                $vResultado = mysqli_query($link,$vSql) or die (mysqli_error($link));		
				
                if ($vResultado){
                 echo ("<h1>El mail se dio de baja correctamente<br></h1>");
                 echo ("<a href='news.php'>Volver a la suscripcion</a>");
                }
                else {
                echo("<h1>No pudo darse de baja el e-mail<br></h1>");
                echo ("<a href='news.php'>Volver a la suscripcion</a>");
                }
                mysqli_close($link);
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
