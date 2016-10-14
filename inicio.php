<!DOCTYPE html>
<HTML lang="en-ES">

	<HEAD>
		<!--<TITLE>INGRESO DE SESIONES</TITLE>-->

		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			body{ font-family:verdana; font-size:15px; }
			div#back_glob{ background-color:grey; border:1px solid #25b2d5; width:350px; margin:0 auto; box-shadow:1px 0px 15px #25b2d5; }
			input{ display:block; margin:10px; }
			div#back_header{ background-color:25b2d5; text-align:center; font-size:22px; font-weight:bold; color:grey; padding:20px; }
			input[type=text], input[type=password]{font-size:15px; padding:10px; border-radius:3px; border:1px solid #ddd; }
			input[type=submit] { background-color:25b2d5; padding:5px 10px 5px 10px; border-radius:3px; border:1px solid #319db8; color:grey; font-weight:bold; }
			div#back_form { display:flex; justify-content: center; }
			
		
		</style>
		
		
	</HEAD>
		<BODY bgcolor="grey">
			<div id="back_glob">
				<div id="back_header">
					LOGIN
				</div>
				<div id="back_form">
					<form name="formulario" method="post" action="verifica.php">
					
					
					<h3 align="center" >Nombre de  Usuario:	<input type ="text" name="username" placeholder="username" />
										Contrase&ntilde;a:	<input type="password" name="password" placeholder="password" /><br>
															<input type="submit" value="Acceder" name="Verificar" /><h3>
					</form>
				</div>
			</div>

		</BODY>
     
</HTML>
<!-- MANEJO DE VARIABLES DE SESIÓN-->