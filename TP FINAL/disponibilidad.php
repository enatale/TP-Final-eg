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
	
			<form action="verdisponibilidad.php" method="post">
            <h1>Ingrese la fecha que desea ver si nuestras instalaciones están disponibles</h1>
           	<label for="dia" >Dia:</label>
            <input type="text" id="dia" name="dia" class="form-control" placeholder="Día" required autofocus>
			<label for="mes" >Mes:</label>
            <input type="text" id="mes" name="mes" class="form-control" placeholder="Mes" required>
		    <label for="anio">Año:</label>
            <input type="text" id="anio" name="anio" class="form-control" placeholder="Año" required>   
            <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Ver disponibilidad</button>
  		    </form>
			<p style="text-align:center; margin-top:20px"> Si usted desea reservar nuestras instalaciones, debe iniciar sesión con su usuario y contraseña. En caso de no tener usuario, puede registrarse en la sección "Iniciar sesión"</p>
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
