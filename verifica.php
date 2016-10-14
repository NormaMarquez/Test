<!DOCTYPE html>
<html lang="en-ES">
<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<ins><h1 style="color:black"  font family="forte" align="center">LOGIN</h1><hr></ins>	
			
</head>
<BODY bgcolor="grey" style="color:black"  font family="forte" align="center">

		<?php
		session_start();
		$SESSION['valida'] = 'false';
		if ($_POST["username"] == "usuario"&& $_POST["password"] == "password"){
			$_SESSION ['username'] = $_POST['username'];
			$_SESSION ['password'] = $_POST['password'];
			$_SESSION ['valida'] = 'true';
			echo "<h1>Bienvenido </h1>".$_SESSION['username'];
			echo "<h1><br /><a href='index1.php'>De clik aquí para ingresar a la página principal</a><h1>";
		}else{
			echo '<h1>Usuario y/o contraseña "invalido"</h1>';
		}
		//MANEJO DE VARIABLES DE SESIÓN
		?>
	<input type="button" onclick="location='inicio.php'" value="Regresar al inicio" />
</body>
</html>