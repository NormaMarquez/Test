<!DOCTYPE html>
<html lang="en-ES">
<head>
			<meta charset="UTF-8">
			
			<link rel="stylesheet" type="text/css" href="style.css">

			<title>Clase PHP - Generar PDF</title>

</head>
<BODY bgcolor="grey">
<ins><h3 style="color:black"  font family="forte" align="center">CERTIFICACIONES ANALISTAS</h3><hr></ins>
<a style="color:white">
<H5>EL auditor debera diligenciar los siguientes campos para emitir una certificación de las auditorías a los especilistas. </H5><br>
<form name='pdf' method='post' action='generador.php'>
Nombre del analista	:		<input type='text' name='nombre' /><br /><br />
Edad:	<input type='text' name='edad' /><br /><br />
Dirección	:   <input type='text' name='direccion' /><br /><br />
Correo		:   <input type='text' name='correo' /><br /><br />
Teléfono	:	<input type='text' name='tel' /><br /><br />
Linea de Servicio	:	<input type='text' name='servicio' /><br /><br />
Calificación Critica: <input type='text' name='critica' /><br /><br />
Calificación No Critica: <input type='text' name='nocritica' /><br /><br />
Nota definitiva: <input type='text' name='definitiva' /><br /><br />
Observaciones: <input type='text' name='observaciones' /><br /><br />
</a><input type='submit' value='Generar' /><br><br>
<center>
			<marquee behavior="alternate"> <br />
			<img height="100" width="100" alt="" src="logo.jpg"/>
			</marquee> <br />
</center>

<input type="button" onclick="location='PanelCentral.php'" value="Regresar al inicio"/></h5>
</body>
</html>

