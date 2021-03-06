<!DOCTYPE html>
<html style="background-image:none" lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/jscript">
			
		function eliminarCliente(nombreUsuario){
		    var cod = nombreUsuario;
			$('#usuarioEliminar').val(cod);			
			document.formEliminar.submit();
		}
		
		function modificarCliente(nombreUsuario){
			var cod = nombreUsuario;
			$('#usuario').val(cod);
			document.formModificar.submit();
		}
	</script>
  </head>
<body style="background-image:none">
<?php
	session_start();
	if(isset($_SESSION['usuario'])&&$_SESSION['usuario']=='administrador'){
		include('adminEncabezado.php');?>
		 
	

<div class="container">
    	<div class="row row-centered">
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
					$vSql = "SELECT * FROM clientes";
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					$total_paginas = ceil($total_registros/ $Cant_por_Pag);
					echo ("<h5 style='text-align:center'>Mostrando la página " . $pagina . " de " . $total_paginas . "</h5>");
					
					$vSql = "SELECT * FROM clientes order by apellido asc limit " . $inicio . "," . $Cant_por_Pag;
					$vResultado = mysqli_query($link,$vSql);
					$total_registros=mysqli_num_rows($vResultado);
					
					?>
					<table class="table table-bordered">
					  <tbody>
						<tr>
						  <th scope="col">Apellido</th>
						  <th scope="col">Nombre</th>
						  <th scope="col">Teléfono</th>
						  <th scope="col">Usuario</th>
						  <th scope="col">Contraseña</th>
                          <th scope="col">E-mail</th>
						  <th scope="col" style="border-top:hidden; border-right:hidden; border-bottom:hidden"></th>
						</tr>
					<?php
					while ($fila = mysqli_fetch_array($vResultado))
					{
					?>
						<tr>
							<td><?php echo ($fila['apellido']); ?></td>
							<td><?php echo ($fila['nombre']); ?></td>
							<td><?php echo ($fila['telefono']); ?></td>
							<td><?php echo ($fila['usuario']); ?></td>
							<td><?php echo ($fila['contrasena']); ?></td>
                            <td><?php echo ($fila['email']); ?></td>		
							<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
								<input type="button" class="btn btn-success" value="MODIFICAR" onClick="javascript:modificarCliente('<?php echo ($fila['usuario']) ?>');S" />
							</td>
							<td style="border-top:hidden; border-right:hidden; border-bottom:hidden">
								<input type="button" class="btn btn-danger" value="ELIMINAR" onClick="javascript:eliminarCliente('<?php echo ($fila['usuario'])?>');S" />
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
							else echo "<a href='gestionarusuarios.php?pagina=" . $i ."'>" . $i . "</a> ";
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
            	<input type="button" class="btn btn-success" value="NUEVO USUARIO" onClick="javascript:window.location ='adminRegistrar.php';" />
            </div>
      </div>
      
     </div>


    <form class="hidden" action="adminModificarCuenta.php" id="formModificar" name="formModificar" method="post">
    	<label for="usuario"><input type="text" id="usuario" name="usuario" /></label>
    </form>
	<form class="hidden" action="eliminarCliente.php" id="formEliminar" name="formEliminar" method="post">
    	<label for="usuarioEliminar"><input type="text" id="usuarioEliminar" name="usuarioEliminar" /></label>
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
