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
				 <?php
                            $fecha=date("d-m-Y");
                            $hora=date("H :i:s");
                            $destinatario= "esteban.natale@yahoo.com.ar";
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
                  			<h3>Su consulta ha sido enviada en breve recibira nuestra respuesta</h3>
                  			<?php }
							else{
				  			?>
                            <h3 style="color:red">ERROR AL ENVIAR CONSULTA</h3>
                            <?php }?>
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
