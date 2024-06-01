<!DOCTYPE html>
 <!--EN CASO DE INICIAR SESION, SI NO Y ENTRAMOS A LA FUERZA NO NOS DEJARA Y NOS REDIRECCIONA AL LOGIN -->
<?php
session_start();
  if (!isset($_SESSION['id'])) {
    header("Location: login.php");
  }
?>
	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/csssistema.css"> <!--EL CSS PARA MODIFICAR -->
	<link rel="stylesheet" type="text/css" href="css/normalize"> <!--EL NORMALIZACION -->
	<title>COMPRAS</title> <!--TEXTO -->
</head>
<body>
	<h1>BIENVENIDO</h1>
	<hr>
	<div class="azul"> <!-- -->
	<header class="cabeza"> <!-- -->
		<div>
			<a href="sistema.php" class="separacion"> <!--RECARGAR LA IMAGEN -->
				<img class="separacion, logo" src="imagenes/logo.png" alt=""> <!--IMAGEN PARA RECARGAR PAGINA -->
			</a>			<!-- -->
		</div>
		<a href="login.php" class="separacion">CERRAR SESION</a> <!--CERRAR LA SESION -->
		<!--<a href="sistema.html" class="separacion">INICIO</a>-->
		<!--<a href="" class="separacion">PLAYSTATION </a>-->
		<a href="" class="separacion">OFERTAS </a> <!--PARA ENVIAR A OFERTS -->
		<a href="" class="separacion">PRODUCTOS </a> <!--PARA ENVIAR A PRODUCTOS -->	 	
		<a href="" class="separacion">CONTACTANOS </a> <!--PARA ENVIAR A CONTACTANOS -->
		<!--<a href="" class="separacion">CARRITO</a>-->
		<div class="circulo">			
			<img class="separacion, carrito" src="imagenes/carrito.png" alt="" onclick="mostrarVentana()"> <!--PARTE DEL CARRITO QUE MUESTRA LA IMAGEN -->
			<!--<div id="numero"></div>-->
		</div>		
	</header>	
	</div>	
	
	<!-- MODAL, DONDE APARECE EL CONTENIDO DEL CARRITO -->
    <div id="miModal" class="modal">
        <div class="modal-contenido" id="cart">
            <span class="cerrar" onclick="cerrarVentana()">&times;</span> <!--X PARA CERRAR EL MODAL-->
            <!--<p>Contenido de tu ventana modal...</p>-->
            <h3 style="text-align:center;">COSAS AGREGADAS AL CARRITO</h3><!--MOSTRAR QUE APARECEN EN EL CARRITO -->
            <hr>
            <ul id="cart-items"></ul> <!--LISTA QUE MOSTRARA EL CONTENIDO DEL CARRITO -->
            <hr>
			<p style="text-align: center;">TOTAL: $<span id="cart-total">0.00</span></p> <!--EL TOTAL DENTRO DEL CARRITO -->
			<button class="cambio" onclick="vaciarCarrito()">Vaciar Carrito</button> <!--VACIAR EL CARRITO -->
    		<button class="cambio" onclick="realizarCompra()">Realizar Compra</button> <!--REALIZAR LA COMPRA -->
        </div>
    </div>
	<hr>
	<div class="espectaculo"> <!-- -->
		<div class="promocion"> <!-- -->
			<br>
			<h2>Enciende tu juego</h2> <!--TEXTO -->
			<h1>SPIDER-MAN</h1> <!--TEXTO -->
			<h2>Disponible en consola y pc</h2> <!--TEXTO -->
		</div>
		<div class="imagen_promocional"> <!-- -->
			<img class="juego_promocional" src="imagenes/promocional.jpg"> <!--IMAGEN LA CUAL ES PROMOCIONAL -->
		</div>
	</div>
	<hr>
	<div>
		<h1>LO MAS VENDIDO</h1> <!--TEXTO -->
		<div class="juegos"> <!-- -->
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/miles-morales.jpeg"> <!--IMAGEN DEL PRIMER JUEGO -->
					<h3>SPIDER-MAN MILES MORALES</h3> <!--NOMBRE DEL JUEGO -->
				</div>
				<div class="precio">
					<h2><del>$800.00</del>  A $500.00</h2> <!--PRECIO DEL JUEGO -->
					<!--<input type="submit" value="Agregar al carrito" name="miles-morales">-->
					<button class="cambio" onclick="agregarAlCarrito('SPIDER-MAN MILES MORALES', 500.00)">Agregar al carrito</button> <!--BOTON PARA ENVIAR AL CARRITO EL NOMBRE Y PRECIO POR JS -->
				</div>
			</div>
			<div class="adjunto">	<!-- -->		
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/last-of-us-2.jpeg"> <!--IMAGEN DEL SEGUNDO JUEGO -->
					<h3>THE LAST OF US II</h3> <!--NOMBRE DEL JUEGO -->
				</div>
				<div class="precio"> <!-- -->
					<h2><del>$1,300.00</del>  A $899.00</h2> <!--PRECIO DEL JUEGO -->
					<!--<input type="submit" value="Agregar al carrito" name="last-of-us-2">-->
					<button class="cambio" onclick="agregarAlCarrito('THE LAST OF US II', 899.00)">Agregar al carrito</button> <!--BOTON PARA ENVIAR AL CARRTIO NOMBRE Y PRECIO Y EN LO DEMAS ES IGUAL -->
				</div>
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/cod-mw-3.jpeg">
					<h3>CALL OF DUT MW III</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2><del>$1,359.00</del>  A $1044.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="cod-mw-3">-->
					<button class="cambio" onclick="agregarAlCarrito('CALL OF DUT MW III', 1044.00)">Agregar al carrito</button>
				</div>
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/gran-turismo-7.jpeg">
					<h3>GRAN TURISMO 7</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2><del>$1,247.00</del>  A $799.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="gran-turismo-7">-->
					<button class="cambio" onclick="agregarAlCarrito('GRAN TURISMO 7', 799.00)">Agregar al carrito</button>
				</div>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<h1>¿MAS JUEGOS?</h1>

	<button class="boton-mostrar" onclick="mostrarOcultarContenido()">Mostrar Contenido</button> <!--BOTON PARA OCULTAR Y MOSTRAR LOS DEMAS JUEGOS -->
	
	<div id="div1" class="contenido-oculto"> <!-- -->
		<div class="juegos"> <!-- -->
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/spider-man.jpeg"> <!--IMAGEN DEL JUEGO -->
					<h3>SPIDER-MAN</h3> <!--NOMBRE DEL JUEGO -->
				</div>
				<div class="precio">
					<h2>$428.00</h2> <!--PRECIO DEL JUEGO -->
					<!--<input type="submit" value="Agregar al carrito" name="spider-man">-->
					<button class="cambio" onclick="agregarAlCarrito('SPIDER-MAN', 428.00)">Agregar al carrito</button>
				</div> <!--BOTON PARA ENVIO AL CARRITO DE NOMBRE Y PRECIO Y EN LO DEMAS ES IGUAL -->
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/god-of-war.jpeg">
					<h3>GOD OF WAR</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2>$390.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="god-of-war">-->
					<button class="cambio" onclick="agregarAlCarrito('GOD OF WAR', 390.00)">Agregar al carrito</button>
				</div>
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/last-of-us-1.jpeg">
					<h3>THE LAST OF US I</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2>$1,200.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="last-of-us-1">-->
					<button class="cambio" onclick="agregarAlCarrito('THE LAST OF US I', 1200.00)">Agregar al carrito</button>
				</div>
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/ragnarok.jpeg">
					<h3>GOD OF WAR "RAGNAROK"</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2>$899.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="ragnarok">-->
					<button class="cambio" onclick="agregarAlCarrito('GOD OF WAR RAGNAROK', 899.00)">Agregar al carrito</button>
				</div>
			</div>
		</div>
			<hr>
		<div class="juegos"> <!-- -->
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/spider-man-2.jpeg">
					<h3>SPIDER-MAN 2</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2>$1,274.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="spider-man-2">-->
					<button class="cambio" onclick="agregarAlCarrito('SPIDER-MAN 2', 1274.00)">Agregar al carrito</button>
				</div>
			</div>
			<div class="adjunto"> <!-- -->
				<div class="juego"> <!-- -->
					<img class="imagen" src="imagenes/uncharted.jpeg">
					<h3>UNCHARTED</h3>
				</div>
				<div class="precio"> <!-- -->
					<h2>$679.00</h2>
					<!--<input type="submit" value="Agregar al carrito" name="uncharted">-->
					<button class="cambio" onclick="agregarAlCarrito('UNCHARTED', 679.00)">Agregar al carrito</button>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	<footer class="obscuro"> <!-- -->
		<div class="pie1"> <!-- -->
			<div class="borde"> <!-- -->
				<img class="logo2" src="imagenes/logo.png"> <!--IMAGEN DEL LOGO DE PLAYSTATION -->
			</div>
			<div class="borde"> <!-- -->
				<h3>PRODUCTOS</h3> <!--TITULO TEXTO -->
				<ul>JUEGOS NUEVOS</ul> <!--TEXTO -->
				<ul>PROMOCIONES</ul> <!--TEXTO -->
				<ul>LO MAS VENDIDO</ul> <!--TEXTO -->
			</div>
			<div class="borde"> <!-- -->
				<h3>TIENDA</h3>	<!--TITULO TEXTO -->
				<ul>FCC BUAP, PUEBLA, MEXICO</ul> <!--TEXTO -->
				<ul>LUN-VIE: 7:00 - 20:00</ul> <!--TEXTO -->
				<ul>+52-222-123-4567</ul> <!--TEXTO -->
			</div>
			<div class="borde"> <!-- -->
				<h3>POLITICA</h3> <!--TITULO TEXTO -->
				<ul>TERMINOS Y CONDICIONES</ul>	<!--TEXTO -->
				<ul>POLITICA DE ENVIO</ul> <!--TEXTO -->	 
				<ul>POLITICA DE REMBOLSOS</ul> <!--TEXTO -->	 
				<ul>POLITICA DE PRIVACIDAD</ul> <!--TEXTO -->	
			</div>						
		</div>
		<hr>
		<div class="pie2"> <!-- -->
			<div class="comunidad"> <!-- -->
				<h2 class="">METODOS DE PAGO</h2> <!--TEXTO -->
				<img src="imagenes/pagos.JPG"> <!--IMAGEN DE LOS PAGOS -->
			</div>
			<div class="comunidad">
				<h2>UNETE A LA COMUNIDAD</h2> <!--TEXTO -->
				<a href="https://www.facebook.com" target=" blank"> <!--IR A FACEBOOK -->
					<img src="imagenes/facebook.png" class="redes" alt=""> <!--IMAGEN DE FACE -->
				</a>
				<a href="https://instagram.com" target=" blank"> <!--IR A INSTAGRAM -->
					<img src="imagenes/instagram.png" class="redes" alt=""> <!--IMAGEN DE INSTA -->
				</a>	
				<a href="https://youtube.com" target=" blank"> <!--IR A YOUTUBE -->
					<img src="imagenes/youtube.png" class="redes" alt=""> <!--IMGANE DE YOU -->
				</a>	
				<a href="https://tiktok.com" target=" blank"> <!--IR A TIKTOK -->
					<img src="imagenes/tiktok.png" class="redes" alt=""> <!--IMAGEN DE TIK -->
				</a>		
			</div>
		</div>
						
		<div class="derecho"> <!-- -->
			<h4>© 2023 Creado por YAEL ZITLE, JAVIER MONTERO, DONOVAN CHETLA</h4> <!--NUESTROS NOMBRES ;3 -->
		</div>
	</footer>

	<script type="text/javascript" src="js/jssistema.js"></script> <!--EL JS PARA LOS LLAMADOS QUE UTILIZAREMOS -->
</body>
</html>