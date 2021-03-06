<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sociedad Italiana de Pujato Gral. Armando Díaz</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
  </head>
  <body>
  <?php include'encabezado.php';?>
    <div id="galeria" class="container">
		<div class="row row-centered">
			<div class="col-sm-8 col-centered">
            	<h1 style="text-align:center">Galería de imágenes</h1>
				<div id="galeria_imagen"><img class="img-responsive" id="imgGaleria" src="imagenes/galeria/fachada1.jpg" alt="Imagen principal" /></div>
					<div id="galeria_miniaturas">
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada1.jpg" alt="Fachada1"  />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada2.jpg" alt="Fachada2" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/hall1.jpg" alt="hall e ingreso baños" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Hall2.jpg" alt="Hall y secretaria"/>
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Hall.jpg" alt="hall" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal1.jpg" alt="salon principal" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal2.jpg" alt="Salon principal 2" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal3.jpg" alt="Salon principal 3" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Escenario.jpg" alt="Escenario"/> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina1.jpg" alt="Cocina 1" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina2.jpg" alt="Cocina 2" /> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Parrillero1.jpg" alt="Parrillero" /> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Parrillero2.jpg" alt="Parrillero 2" /> 	
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Patio.jpg" alt="Patio" />      
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Banos1.jpg" alt="Baños 1" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Banos2.jpg" alt="Baños 2" />
									 
					</div>
				</div>
			</div>
		</div>
   <?php include'pie.php';?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
