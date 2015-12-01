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
                <h1>Envíe su consulta y será respondida a la brevedad</h1>
				<form action="consulta.php" method="post" name="formConsulta">
                <label for="nombre">Nombre:</label> <input class="form-control" type="text" id="nombre" name="nombre" required/>
                <label for="remitente">Tu mail:</label><input class="form-control" type="email" id="remitente" name="remitente" required />
                <label for="asunto">Asunto:</label><input class="form-control" type="text" id="asunto" name="asunto" required  />
                <label for="consulta">Tu consulta:</label><textarea class="form-control" id="consulta" name="consulta" cols="20" rows="10" required></textarea>
                <input class="btn-success btn btn-block" type="submit" value="Enviar"/>
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
