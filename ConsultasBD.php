<?php
	include("conexion.php"); //INCLUIMOS LA CONEXION

	$link = Conectar(); //PASAMOS A LINK EL CONEXTAR

	//$query = "DELETE FROM USUARIOS WHERE ID = 1";
	//mysqli_query($link, $query);

	//$query = "INSERT INTO USUARIOS VALUES(2,'JESUS HERNANDEZ', 'JESUS@CORREO.COM', 'JESUS', '12345678')";
	//mysqli_query($link, $query);

	//$query = "UPDATE USUARIOS SET PASS = '44444444' WHERE ID = 2" ;
	//mysqli_query($link, $query);

	$query = "SELECT * FROM DATOS"; //PASAMOS A QUERY TODOS LOS DATOS
	$consulta = mysqli_query($link, $query); //A CONSULTA VOLVEMOS A UTILIZAR LINK Y QUERY PARA PASARLOS A CONSULTA

	$datos = mysqli_num_rows($consulta); //NUMERO DE FILAS DD CONSULTA LO PASAMOS A LOS DATOS
	$columnas = mysqli_num_fields($consulta); //Y EL NUMERO DE COLUMNAS DE LA CONSULTA LO PASAMOS A COLUMNAS

	print("NO. REGISTROS => $datos <br>"); //MOSTRAMOS EL NUMERO DE REGISTROS DE LOS DATOS
	print("NO. COLUMNAS => $columnas <br>"); //MOSTRAMOS EL NUMERO DE COLUMNAS DE LAS COLUMNAS
 
	print("VALORES: <br><hr><br>"); //MOSTRAMOS LOS VALORES
	while ($fila = mysqli_fetch_row($consulta)) { //MIENTRAS TENGAMOS FILAS DE LA CONSULTA
		print("$fila[0] - $fila[1] - $fila[2] - $fila[3] - $fila[4] <br>");	//MOSTRAMOS LA FILAS CON LOS DATOS DE LA FILA 0,1,2,3,4
	}

	mysqli_close($link); //CERRAMOS EL LINK 


?>