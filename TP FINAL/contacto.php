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
    	<div class="row row-centered"> 
           <div class="col-lg-6 col-centered">   
                <h3>Envíe su consulta y será respondida a la brevedad</h3>
				<form action="consulta.php" method="post" name="formConsulta">
                <p>Nombre: <input class="form-control" type="text" name="nombre" required/></p>
                <p>Tu mail:<input class="form-control" type="email" id="remitente" name="remitente" required /></p>
                <p>Asunto:<input class="form-control" type="text" id="asunto" name="asunto" required  /></p>
                <p>Tu consulta:<textarea class="form-control" name="consulta" cols="20" rows="10" required></textarea></p>
                <input class="btn-success btn btn-block" type="submit" value="Enviar"/>
                </form>
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
