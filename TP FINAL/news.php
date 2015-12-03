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
           <div class="col-lg-6 col-centered">   
		   <h1>Suscribirse a nuestro boletín de noticias:</h1>
		   
		   <form action="newsalta.php" method="post" name="formSuscripcion">
           <label for="mail">Mail:</label> <input class="form-control" type="email" id="mail" name="mail" required/>
		   
		   <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Suscribirse</button>
 
           </form>
		   	   
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
