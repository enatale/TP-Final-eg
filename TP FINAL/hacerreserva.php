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
			$anio= $_POST['anio'];
			$mes = $_POST['mes'];
			$dia = $_POST['dia'];
			$fecha= $anio."-".$mes."-".$dia;
			$hoy=date("Y-m-d");
			if($mes>'12' or $dia>'31' or ($dia>'30' and ($mes=='4' or $mes=='6' or $mes=='9' or $mes=='11')) or ($dia>'28' and $mes=='2')  or !is_numeric ($anio) or !is_numeric ($mes) or !is_numeric ($dia) or $anio>'3000')
			{
			echo("<h3> Fecha no válida </h3><br />");
			echo("<a href='reserva.php'>Volver</a>");
			}
			else
			{
			if ($hoy>$fecha){
			echo("<h3> La fecha ya pasó</h3><br />");
			echo("<a href='reserva.php'>Volver</a>");
			}
			else{
			include('conexion.inc');
						
			$consulta = "Select * from reservas where dia = '$fecha' ";
			$resultado = mysqli_query($link, $consulta) or die(mysqli_error($link));
			$cantidad = mysqli_num_rows($resultado);
			if($cantidad==1){
		    		echo("<h3> Las instalaciones no están disponibles para dicha fecha </h3><br />");
		         	echo("<a href='reserva.php'>Volver</a>");
					}
				
					else{
                    $usuario=$_SESSION['usuario'];
					$vSql = "INSERT INTO reservas (dia, estado, usuario)
                    values ('$fecha', 'Pendiente', '$usuario')";
                    mysqli_query($link,$vSql) or die (mysqli_error($link));
				   
				   
				   
				    echo("<h3> La reserva se ha realizado con éxito </h3><br />");
		         	echo("<a href='misreservas.php'>Ir a mis reservas</a>");
 
					}
				
				
			mysqli_free_result($resultado);
			mysqli_close($link);
			}
			}
			?>
			


		   
		   
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
