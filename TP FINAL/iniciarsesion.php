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
          <form action="login.php" method="post">
            <h1>Ingrese sus datos de usuario:</h1>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña" required>

            <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Iniciar sesión</button>
            <a class="btn btn-lg btn-success btn-block" href="registrar.php">Registrarse</a>
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
