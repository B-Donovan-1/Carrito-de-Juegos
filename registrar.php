<?php
	include("conexionbd.php"); //PARA REGISTRAR EN BASE DE DATOS INCLUIMOS LA CONEXIONBD

	if (isset($_POST['name'])) { //SI TENEMOS UN NOMBRE CUANDO RECUPERAMOS LOS DATOS 
		if (strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1 && strlen($_POST['password']) >=1) { //SI EL TAMAÑO DEL NOMBRE, CORREO Y CONTRASEÑA ES MAYOR QUE 1 
			$name = trim($_POST['name']); //PASAMOS EL NOMBRE A UNA VARIABLE 
			$email = trim($_POST['email']); //PASAMOS EL CORREO A UNA VARIABLE 
			$password = trim($_POST['password']); //PASAMOS LA CONTRASEÑA A UNA VARIABLE 
			$fecha_registro = date("d/m/y"); //PASAMOS LA FECHA DE REGISTRO A UNA VARIABLE 

			$consulta = "INSERT INTO datos(nombre, correo, contraseña, fecha_registro) VALUES ('$name','$email','$password','$fecha_registro')"; //INSERTAMOS EN LOS DATOS LOS VALORES YA DADOS Y LOS PASAMOS A CONSULTA
			$resultado = mysqli_query($conex,$consulta); //PASAMOS CONEX Y CONSULTA AL RESULTADO

			if ($resultado) { //SI TENEMOS UN RESULTADO
				?>
					<script>
						alert('TE HAS INSCRITO CORRECTAMENTE'); //REALIZA LA INSRIPCION
					</script>
					<!--<h3 class="correcto">TE HAS INSCRITO CORRECTAMENTE</h3>-->
				<?php
			}else{
				?>
					<script>
						alert('HA OCURRIDO UN ERROR'); //MOSTRAMOS UN ERROR CON JS
					</script>
					<!--<h3 class="error">HA OCURRIDO UN ERROR</h3>-->
				<?php
			}
	}else{
		?>
			<script>
				alert('COMPLETE CORRECTAMENTE LOS CAMPOS'); //MOSTRAMOS UN ERROR QUE NO ESTAN DATOS CORRECTOS CON JS
			</script>
			<!--<h3 class="error">COMPLETE CORRECTAMENTE LOS CAMPOS</h3>-->
		<?php
		}
	}
?>