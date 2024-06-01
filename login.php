<!DOCTYPE html>
 <!--UTILIZAMOS SESIONES PARA INICIAR O DESTRUIR -->
<?php 
  session_start();
  session_destroy();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/csslogin.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css"> <!--EL CSS QUE VAMOS A UTILIZAR AQUI -->
  
	<title></title>
</head>
<body>
  <div class="login-menu"> <!-- -->
    <a class="obscuro" href="index.html">Regresar al Inicio</a>  <!--REGRESAMOS AL INICIO --> 
  </div>
  
  <div class="login-registro"> <!-- -->
    <a class="obscuro" href="registro.php">Registrarse</a>  <!--NOS REGISTRAMOS -->
  </div>
  
	<form class="login-form" method="post" action="consultas.php"> <!--GENERAMOS EL FORMULARIO -->
    <h1 class="login-text">Iniciar Sesion</h1> <!--TEXTO -->
    <p class="login-text"> <!-- -->
      <span class="fa-stack fa-lg"> <!-- -->
        <i class="fa fa-circle fa-stack-2x"></i> <!-- --> 
        <i class="fa fa-lock fa-stack-1x"></i> <!-- -->
      </span>
    </p>
    
    <input type="email" name="correo" class="login-username" autofocus="true" required="true" placeholder="usuario@correo.com" /> <!--PARTE DONDE VA EL CORREO Y SUS CARACTERISTICAS -->
    <input type="password" name="contraseña" class="login-password" required="true" placeholder="Contraseña" /> <!--PARTE DONDE VA LA CONTRASEÑA Y SUS CARACTERISTICAS -->
    <input type="submit" name="login" value="Entrar" class="login-submit" /> <!--EL BOTON PARA ENVIAR -->

  </form>

  <a href="index.html" class="login-forgot-pass">¿OLVIDASTE TU CONTRASEÑA?</a> <!--TEXTO -->
  <div class="underlay-photo"></div> <!-- -->
  <div class="underlay-black"></div> <!-- -->

</body>
</html>