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
			<div class="col-lg-8 col-centered">
            	<h1 style="text-align:center">Galería de imágenes</h1>
				<div id="galeria_imagen"><img class="img-responsive" id="imgGaleria" src="imagenes/galeria/fachada1.jpg" alt="Imagen principal" /></div>
					<div id="galeria_miniaturas">
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada1.jpg" alt="Fachada1"  />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/fachada2.jpg" alt="Fachada2" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Hall%20e%20ingreso%20a%20los%20Baños%20de%20Frente.JPG" alt="hall e ingreso baños" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Hall%20y%20Secretaría.JPG" alt="Hall y secretaria"/>
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Hall.JPG" alt="hall" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal1.jpg" alt="salon principal" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal2.jpg" alt="Salon principal 2" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/SalonPrincipal3.jpg" alt="Salon principal 3" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Escenario.JPG" alt="Escenario"/> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina1.jpg" alt="Cocina 1" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Cocina2.jpg" alt="Cocina 2" /> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Interior%20Parrillero,%20Puerta%20de%20ingreso%20a%20Cocina.JPG" alt="Parrillero" /> 
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Interior%20Parrillero%20con%20en%20Depósito.JPG" alt="Parrillero 2" /> 	
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Patio%20y%20Frentes%20de%20Cocina%20y%20Parrillero.JPG" alt="Patio" />      
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Baños1.jpg" alt="Baños 1" />
						<img class="miniatura" onClick="javascript:document.getElementById('imgGaleria').src=this.src;" src="imagenes/galeria/Baños2.jpg" alt="Baños 2" />
									 
					</div>
				</div>
			</div>
		</div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Sociedad Italiana de Pujato General Armando Díaz - Dirección: J.R. Rodríguez 448 - Pujato, Santa Fe, Argentina - Telefono: (03464)-494636</p>
      </div>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
