<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/normalize.css"> <!--USAMOS LA NORMALIZACION -->
	<link rel="stylesheet" type="text/css" href="css/cssregistro.css"> <!--Y EL CSS PARA MODIFICAR -->
	
	<title>REGISTRO</title>
</head>
<body>
	<div>
		<div>
	      <div class="login-menu"> <!-- -->
	        <a class="obscuro" href="index.html">Regresar al Inicio</a> <!--VAMOS AL INICIO -->  
	      </div>
	      <div class="login-registro"> <!-- -->
	        <a class="obscuro" href="login.php">Iniciar sesion</a> <!--INICIAMOS SESION -->
	      </div>
    	</div>

    	<div class="formulario"> <!--PARTE DEL FORMULARIO -->
    		<form method="post"> <!--METODO DE ENVIO POST -->
    			<h1>Registrate con nosotros</h1> <!--TEXTO -->    			
    			<input type="text" name="name" class="usuario" autofocus="true" required="true" placeholder="usuario"> <!--PARTE DEL NOMBRE QUE REGISTRAREMOS -->
    			<br><br> <!--ESPACIO -->
    			<input type="email" name="email" class="correo" autofocus="true" required="true" placeholder="usuario@correo.com" /> <!--PARTE DEL CORREO QUE REGISTRAREMOS -->
   				<br><br> <!--ESPACIO -->
   				<input type="password" name="password" class="contraseña" required="true" placeholder="Contraseña" /> <!--PARTE DE LA CONTRASEÑA QUE REGISTRAREMOS-->
    			<br><br> <!--ESPACIO -->
    			<input type="submit" name="register" value="Entrar" class="registro" /> <!--BOTON PARA EL ENVIO DEL FORMULARIO -->
    		</form>
    	</div>

	</div>
		<!--INCLUIMOS EL REGISTRAR PARA REGISTRAR EN LA BASE DE DATOS -->
	<?php
		include("registrar.php"); 
	?>
	
</body>
</html>