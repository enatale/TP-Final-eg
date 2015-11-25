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
	
	<form action="hacerreserva.php" method="post">
            <h3>Ingrese la fecha que desea reservar nuestras instalaciones</h3>
			<label for="dia" class="sr-only">Dia</label>
            <input type="text" id="dia" name="dia" class="form-control" placeholder="Día" required autofocus>
			<label for="mes" class="sr-only">Mes</label>
            <input type="text" id="mes" name="mes" class="form-control" placeholder="Mes" required>
            <label for="anio" class="sr-only">Año</label>
            <input type="text" id="anio" name="anio" class="form-control" placeholder="Año" required>
	
			

           

            <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Reservar</button>
 
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