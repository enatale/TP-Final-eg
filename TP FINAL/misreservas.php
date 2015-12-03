<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <script type="text/jscript">		
		function eliminarReserva(codReserva){
			var cod = codReserva;
			$('#codigoEliminar').val(cod);
			document.formEliminar.submit();
		}
	</script>
  </head>
  <body>
    <?php include'encabezado.php';?>
	
	<div class="container">
      <div class="row row-centered">
          <div class="col-lg-6 col-centered">
	
		   
		   			<?php
					if(isset ($_SESSION['usuario'])){
							include("conexion.inc");
							$usuario=$_SESSION['usuario'];
							$vSql = "SELECT * FROM reservas WHERE usuario='$usuario'";
							$vResultado = mysqli_query($link,$vSql);
							$cantidadReservas=mysqli_num_rows($vResultado);
							if ($cantidadReservas>0)
							{
								echo("<h1>Estas son sus reservas actuales:</h1><br />");
								$vSql2= "SELECT * FROM clientes WHERE usuario='$usuario'";
								$vResultado2= mysqli_query($link,$vSql2); 
								?>
								<table class="table table-bordered">
								  <tbody>
									<tr>
									  <th scope="col">Día</th>
									  <th scope="col">Nombre y apellido</th>
									  <th scope="col">Estado</th>
									  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
									</tr>
								<?php
								$fila2= mysqli_fetch_array($vResultado2);
								while ($fila = mysqli_fetch_array($vResultado))
								{
									$fecha=$fila['dia'];
									$fechaordenada=substr($fecha, 8).'-'.substr($fecha,5 ,2).'-'.substr($fecha, 0, 4);
									?>
										<tr>
											<td><?php echo ($fechaordenada); ?></td>
											<td><?php echo ($fila2['nombre'].' '.$fila2['apellido']); ?></td>
											<td><?php echo ($fila['estado']); ?></td>
											<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
												<input type="button" class="btn btn-danger" value="Eliminar" onClick="javascript:eliminarReserva(<?php echo($fila['codigo'])?>);" />
											</td>
										</tr>
									<?php
								}
								echo("</tbody></table>");
								mysqli_free_result($vResultado);
								mysqli_close($link);
							}
							else{
								echo("<h1> Usted no posee reservas actualmente</h1><br />");
								echo("<a href='reserva.php'>Ir a reservar instalaciones</a>");
							}
					}
					else{
					echo('<h1 style="color:red"> DEBE ESTAR LOGUEADO PARA VER ESTA PÁGINA</h1>');
					}
					?>
					
		  </div>
	  </div>
	</div>
	<form class="hidden" action="eliminarReservaCli.php" id="formEliminar" name="formEliminar" method="post">
    	<label for="codigoEliminar">"<input type="text" id="codigoEliminar" name="codigo" /></label>
    </form>
	
    <?php include'pie.php';?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
