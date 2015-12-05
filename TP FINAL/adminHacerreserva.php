<!DOCTYPE html>
<html style="background-image:none" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body style="background-image:none">
<?php
	session_start();
	if(isset($_SESSION['usuario'])&&$_SESSION['usuario']=='administrador'){
		include('adminEncabezado.php');?>
        <div class="container">
            <div class="row row-centered">
                <div class="col-md-8 col-centered">
                	 <?php 
						$anio= $_POST['anio'];
						$mes = $_POST['mes'];
						$dia = $_POST['dia'];
						$usuario=$_SESSION['usuario'];
						$fecha= $anio."-".$mes."-".$dia;
						$hoy=date("Y-m-d");
						if($mes>'12' or $dia>'31' or ($dia>'30' and ($mes=='4' or $mes=='6' or $mes=='9' or $mes=='11')) or ($dia>'28' and $mes=='2')  or !is_numeric ($anio) or !is_numeric ($mes) or !is_numeric ($dia) or $anio>'3000'){
							echo("<h1> Fecha no válida </h1><br />");
							echo("<a href='adminReserva.php'>Volver</a>");
						}
						else {
							if ($hoy>$fecha){
								echo("<h1> La fecha ya pasó</h1><br />");
								echo("<a href='adminReserva.php'>Volver</a>");
							}
							else{
								include('conexion.inc');		
								$consulta = "Select * from reservas where dia = '$fecha' ";
								$resultado = mysqli_query($link, $consulta) or die(mysqli_error($link));
								$cantidad = mysqli_num_rows($resultado);
								if($cantidad==1){
									echo("<h3> Las instalaciones no están disponibles para dicha fecha </h3><br />");
									echo("<a href='adminReserva.php'>Volver</a>");
								}
								else{
									$vSql = "INSERT INTO reservas (dia, estado, usuario)
									values ('$fecha', 'Pendiente','$usuario')";
									mysqli_query($link,$vSql) or die (mysqli_error($link));
									echo("<h1> La reserva se ha realizado con éxito </h1><br />");
									echo("<a href='gestionarreservas.php'>Ir a reservas</a>");
								}
								mysqli_free_result($resultado);
								mysqli_close($link);
							}
						}
						?>
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