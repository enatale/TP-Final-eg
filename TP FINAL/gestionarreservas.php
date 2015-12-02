<!DOCTYPE html>
<html style="background-image:none" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/jscript">
		function actualizarReserva(codReserva){
			var cod = codReserva;
			$('#codigoActualizar').val(cod);
			document.formActualizar.submit();
		}
		
		function eliminarReserva(codReserva){
			var cod = codReserva;
			$('#codigoEliminar').val(cod);
			document.formEliminar.submit();
		}
	</script>
  </head>
<body style="background-image:none">
<?php
	session_start();
	if(isset($_SESSION['usuario'])&&$_SESSION['usuario']=='administrador'){
		include('adminEncabezado.php');?>
    
<div class="container">
      <div class="row row-centered" style="text-align:center">
          <div class="col-md-10 col-centered">
				<?php
				if(isset($_SESSION['usuario']) and $_SESSION['usuario']=='administrador'){
					include("conexion.inc");
					
					$Cant_por_Pag = 5;
					
					$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
					if (!$pagina) {
						$inicio = 0;
						$pagina=1;
					}
					else {
						$inicio = ($pagina - 1) * $Cant_por_Pag;
					}
					$vSql = "SELECT * FROM reservas";
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					$total_paginas = ceil($total_registros/ $Cant_por_Pag);
					echo ("<h5 style='text-align:center'>Mostrando la página " . $pagina . " de " . $total_paginas . "</h5>");
					
					$vSql = "SELECT * FROM reservas order by dia asc limit " . $inicio . "," . $Cant_por_Pag;
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					
					?>
					<table class="table table-bordered">
					  <tbody>
						<tr>
						  <th scope="col">Código</th>
						  <th scope="col">Día</th>
						  <th scope="col">Estado</th>
						  <th scope="col">Usuario</th>
						  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
						  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
						</tr>
					<?php
					while ($fila = mysqli_fetch_array($vResultado))
					{
					$fecha=$fila['dia'];
					$fechaordenada=substr($fecha, 8).'-'.substr($fecha,5 ,2).'-'.substr($fecha, 0, 4);
					?>
						<tr>
							<td><?php echo ($fila['codigo']); ?></td>
							<td><?php echo ($fechaordenada); ?></td>
							<td><?php echo ($fila['estado']); ?></td>
							<td><?php echo ($fila['usuario']); ?></td>
							<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
							<?php if($fila['estado']=="Pendiente"){
								?>	
								<input type="button" class="btn btn-success" value="PAGAR" onClick="javascript:actualizarReserva(<?php echo($fila['codigo'])?>);" />	
								<?php
							}
							?>
							</td>
							<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
								<input type="button" class="btn btn-danger" value="ELIMINAR" onClick="javascript:eliminarReserva(<?php echo($fila['codigo'])?>);" />
							</td>
						</tr>
					<?php
					}
					mysqli_free_result($vResultado);
					mysqli_close($link);
					?>
					  </tbody>
					</table>
					<?php
					if ($total_paginas > 1){?>
						<p style="text-align:center"> <?php
						for ($i=1;$i<=$total_paginas;$i++){
							if ($pagina == $i) echo $pagina . " ";
							else echo "<a href='gestionarreservas.php?pagina=" . $i ."'>" . $i . "</a> ";
						}
						?> </p> <?php
					}
				} else {
					echo('<h1 style="color:red"> DEBE ESTAR LOGUEADO COMO ADMINISTRADOR PARA VER ESTA PÁGINA</h1>');
				}
                ?>
          </div>
      </div>
      <div class="row row-centered">
        	<div class="col-md-2 col-centered">
            	<input type="button" class="btn btn-success" value="NUEVA RESERVA" onClick="javascript:window.location ='adminReserva.php';" />
            </div>
      </div>
     </div>
    <form class="hidden" action="actualizarReserva.php" id="formActualizar" name="formActualizar" method="post">
    	<label for="codigoActualizar"><input type="text" id="codigoActualizar" name="codigo" /></label>
    </form>
    <form class="hidden" action="eliminarReserva.php" id="formEliminar" name="formEliminar" method="post">
    	<label for="codigoEliminar"><input type="text" id="codigoEliminar" name="codigo" /></label>
    </form>
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
