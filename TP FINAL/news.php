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
		   
		   <?php 
		   if(isset($_SESSION['usuario'])){
				include("conexion.inc");
						$usuario= $_SESSION['usuario'];
						$vSql = "Select * from clientes where usuario='$usuario'";
						$vResultado= mysqli_query($link, $vSql) or die(mysqli_error($link));
						$fila = mysqli_fetch_array($vResultado); 
						$mail=$fila['email'];
						$vSql2= "Select * from mailboletin where direccion='$mail'";
						$vResultado2= mysqli_query($link, $vSql2) or die(mysqli_error($link));
						$fila2 = mysqli_fetch_array($vResultado2);
						$cantidad = mysqli_num_rows($vResultado2);
				if($cantidad==1){	
				   ?>
               <h1>Usted ya se encuentra suscripto a nuestro boletin de noticias. </h1>
               <form action="newsbaja.php" method="post" name="formDesuscripcion">
			   <input class="form-control hide" type="email" id="emailb" name="emailb" value="<?php echo($mail)?>"/>
			   <button class="btn btn-lg btn-danger btn-block" type="submit" style="margin-top:10px">Desuscribirse</button>   		   </form>   
               <h3>Presione el botón para desuscribirse</h3>
                <?php 
				}
				else
		   		{
				?>
               <h1>Suscribirse a nuestro boletín de noticias:</h1>   							 
			   <form action="newsalta.php" method="post" name="formSuscripcion">
			   <input class="form-control hide" type="email" id="email" name="email" value="<?php echo($mail)?>"/>
			   <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Suscribirse</button>   		   </form>   
		   <?php
				}
		   }
		   else 
		   { 
		   ?> 
          	   <h1>Suscribirse a nuestro boletín de noticias:</h1>  
               <form action="newsalta.php" method="post" name="formSuscripcion">
               <label for="mail">Mail:</label> <input class="form-control" type="email" id="email" name="email" required/>
               
               <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:10px">Suscribirse</button>
     
               </form>
		   <?php } ?>
           <div style="margin-top:10px">
           <a href="index.php">Volver al inicio</a>
           </div>
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
