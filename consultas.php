<?php
	
	include("conexion.php"); //INCLUIMOS LA CONEXION PARA UTILIZARLA

	$link = Conectar(); //CREAMOS UNA VARIABLE A LA CONEXION

	//$username = $_REQUEST['name'];
    $email = $_REQUEST['correo']; //RECUPERAMOS EL CORREO Y LO ASIGNAMOS A UNA VARIABLE
    $password = $_REQUEST['contraseña']; //RECUPERAMOS LA CONTRASEÑA Y LO ASIGNAMOS A UNA VARIABLE

    //print("El usuario recibido es: [$username] <br>");
    print("El correo recibido es: [$email] <br>"); //MOSTRAMOS EL CORREO 
    print("El password recibido es: [$password] <br>"); //MOSTRAMOS LA CONTRASEÑA

	$query = "select * from datos where correo = '" . $email ."'"; //AGREGAMOS A UNA VARIABLE EL CORREO PARA VALIDAR SIEMPRE QUE SE ENCUENTRE UN CORREO

	$consulta = mysqli_query($link,$query); //LA CONEXION Y EL QUERY LO PASAMOS A UNA VARIABLE CONSULTA

	$datos = mysqli_num_rows($consulta); //EL NUMERO DE COLUMNAS DE LA CONSULTA LA PASAMOS A UNA VARIBLE DATOS

	$fila = mysqli_fetch_row($consulta); //EL NUMERO DE FILAS DE LA CONSULTA LA PASAMOS A UNA VARIABLE FILA

	//$columnas = mysqli_num_fields($consulta);
	//print("El numero de registros de la tabla det_usuarios es: [$datos] <br>");
	//print("El numero de columnas de la tabla det_usuarios es: [$columnas] <br>");
	//print("<br><hr><br>");
	//print("Los Datos de la tabla det_usuarios son: <br>");
	//while($fila = mysqli_fetch_row($consulta))
	//{
	//	print("$fila[0] - $fila[1] <br>");
	//}

	if ($datos == 0) { //SI LOS DATOS RECIBIDOS DEL LOGIN NO EXISTEN O NO SE PUSO NADA
		//print(" <br> <br> <br> Usuario No registrado <br>");
		header("Location: error-usuario.php"); //ENVIARA AL ERROR DE QUE EL USUARIO NO EXISTE
		//echo "<script>alert('USUARIO NO REGISTRADO');</script>";
		//echo "<script>window.onload = function() { window.location.href='login.php'; }</script>";
		exit(); //Y NOS SALIMOS
	}
	elseif ($fila[3] != $password) {
		//print(" <br> <br> <br> Error en Contraseña <br>");
		header("Location: error.php"); //ENVIARA AL ERROR DE QUE EL USUARIO Y CONTRASEÑAS NO COINCIDEN
		//echo "<script src='js/error.js'></script>";
		//echo "<script>mostrarAlerta('Error en la contraseña');</script>";		
		//echo "<script>alert('EL CORREO Y LA CONTRASEÑA NO COINCIDEN');</script>";
		//echo "<script>window.onload = function() { window.location.href='login.php'; }</script>";
		exit(); //Y NOS SALIMOS

	}
	elseif($fila[2] == $email && $fila[3] == $password){ //SI LA FIAL 2 COINCIDE CON EL EMAIL Y LA FIAL 3 COINCIDE CON LA CONTRASEÑA 
		//print(" <br> <br> <br> Bienvenidos al Sistema <br>");		
		session_start(); //INICIAMOS LA SESION
		$_SESSION['id'] = $fila[3]; //LE PASAMOS LA CONTRASEÑA A LA SESION CON UN ID DETERMINADO
		header("Location: sistema.php"); //ABRIMOS EL SISTEMA DE COMPRAS
	}


?>