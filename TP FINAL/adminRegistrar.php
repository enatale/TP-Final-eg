<!DOCTYPE html>
<html style="background-image:none" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/validarRegistro.js"></script>
  </head>
<body style="background-image:none">
<?php
	session_start();
	if(isset($_SESSION['usuario'])&&$_SESSION['usuario']=='administrador'){
		include('adminEncabezado.php');?>
		 
	

    <div class="container">
        <div class="row row-centered">
            <div class="col-md-8 col-centered">
                <form action="adminAltausuario.php" method="post" name="formRegistro" id="formRegistro"  >
                    <h1>Ingrese los datos del usuario a registrar:</h1>
                                
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                    <label for="usuario" style="color:red" id="msjUsuario"></label><br/>  
                                        
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="pass_1" name="contrasena" class="form-control" placeholder="Contraseña" required>
                    <label for="contrasena" style="color:red" id="msjPass_1"></label><br/>
                                
                    <label for="contrasena2">Repita la contraseña:</label>
                    <input type="password" id="pass_2" name="contrasena2" class="form-control" placeholder="Repita la contraseña" required>
                    <label for="contrasena2" style="color:red" id="msjPass_2"></label><br/>
                                
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                    <label for="nombre" style="color:red" id="msjNombre"></label><br/>
                                
                    <label for="apellido">Apellido: </label>
                    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required>
                    <label for="apellido" style="color:red" id="msjApellido"></label><br/>
                                
                                
                    <label for="telefono">Telefono: </label>
                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" required>
                    <label for="telefono" style="color:red" id="msjTelefono"></label><br/>
                                
                    <label for="email">E-mail: </label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required>
                    <label for="email" style="color:red" id="msjEmail"></label><br/>
                                
                                
                    <input type="button" name="registrar" class="btn btn-lg btn-success btn-block" style="margin-top:10px" id="registrar" value="Registrar" onClick="javascript:enviar();">
                
                </form>
            </div>
        </div>
    </div>

    <?php }
		else {
			echo('<h1 style="color:red;text-align:center"> PARA VER ESTA PÁGINA DEBE ESTAR LOGUEADO COMO ADMINISTRADOR</h1>');
		}
	?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
