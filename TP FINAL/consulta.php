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
                            $fecha=date("d-m-Y");
                            $hora=date("H :i:s");
                            $destinatario= "info@sociedaditaliana.96.lt";
                            $remitente='From:' .$_POST['remitente'];
                            $cuerpo="
                                    \n
                                    Nombre:$_POST[nombre]\n
                                    Mail:$_POST[remitente]\n
                                    Asunto:$_POST[asunto]\n
                                    Consulta:$_POST[consulta]\n
                                    Enviado: $fecha a las $hora\n
                                    \n
                                    ";
                            $asunto="Comentario";
                            if(mail($destinatario,$asunto,$cuerpo,$remitente)){?>                            
                  			<h1>Su consulta ha sido enviada en breve recibira nuestra respuesta</h1>
                  			<?php
								$respuesta = "El mail de consulta que ha enviado desde la página de la Sociedad Italiana de Pujato fue enviado correctamente. En breve responderemos a su consulta.";
								$remitente2 ='From:' .$destinatario;
								$destinatario2 = $_POST['remitente'];
								mail($destinatario2,"Mail de consulta enviado",$respuesta,$remitente2);
							}
							else{
				  			?>
                            <h1 style="color:red">ERROR AL ENVIAR CONSULTA</h1>
                            <?php }?>
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
