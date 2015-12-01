<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/validarRegistro.js"></script>    
  </head>
  <body>
    <?php include'encabezado.php';?>
    
    <div class="container">
      <div class="row row-centered">
          <div class="col-lg-6 col-centered">
          <form action="altausuario.php" method="post" name="formRegistro" id="formRegistro"  >
            <h1>Ingrese sus datos:</h1>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="pass_1" name="contrasena" class="form-control" placeholder="Contraseña" required>
            <label for="contrasena2">Repita la contraseña:</label>
            <input type="password" id="pass_2" name="contrasena2" class="form-control" placeholder="Repita la contraseña" required>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
            <label for="apellido">Apellido: </label>
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required>
            <input type="button" name="registrar" class="btn btn-lg btn-success btn-block" style="margin-top:10px" id="registrar" value="Registrar" onClick="javascript:enviar();">

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
