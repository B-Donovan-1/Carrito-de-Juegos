<?php
	
	function Conectar(){	//REALIZAMOS LA CONEXION
		$servername = 'localhost'; //SERVIDOR QUE ES EL LOCALHOST
		$database = 'registro'; //EL NOMBRE DE LA BASE DE DATOS
		$username = 'root'; //EL USUARIO QUE ES EL ROOT
		$password = ''; //NO NOS DEJA PONER CONTRASEÑA ASI QUE LA PASAMOS VACIA

			//CREAMOS LA CONEXION
		if(!($conn = mysqli_connect($servername, $username, $password))) //SI NO SE ENCUENTRA ALGUN CAMPO
		{
			print("ERROR EN LA CONEXION AL SERVIDOR <br>"); //MANDAMOS UN ERROR
			exit(); //Y NOS SALIMOS PARA EVITAR PROBLEMAS
		}
		else{
			print("CONEXION EXITOSA <br>"); //SI TODO SALE BIEN MOSTRAMOS UNA CONEXION EXITOSA
		}

			
			//CONEXION A LA BASE DE DATOS
		if(!mysqli_select_db($conn, $database)) //SI NO SE ENCUENTRA ALGUN CAMPO
		{
			print("ERROR EN LA CONEXION DE LA BASE DE DATOS <br>"); //MANDAMOS UN ERROR
			exit(); //Y NOS SALIMOS PARA EVITAR PROBLEMAS
		}
		else{
			print("CONEXION EXITOSA A LA TABLA [$database] <br>");
		}

		return $conn; //SI TODO SALE BIEN REGRESAMOS LA CONEXION
	}

?>