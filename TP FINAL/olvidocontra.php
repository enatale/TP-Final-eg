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
          <form action="enviarcontra.php" method="post">
            <h1>Ingrese su usuario e e-mail. Recibira un correo con su contraseña:</h1>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <label for="email" style="margin-top:10px;">E-mail: </label>          
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
    

            <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Enviar</button>
            
            <p style="font-size:16px; margin-top:10px"> En caso de no poder solucionar su problema, por favor <a href="contacto.php">comuníquese con nosotros</a></p>
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


















