<html>
<body bgcolor="grey">
<ins><h3 style="color:black"  font family="forte" align="center">MODIFICAR DATOS ANALISTAS</h3><hr></ins>
<?php
ini_set('error_reporting',0);

$connect=mysqli_connect("localhost", "norma", "norma", "ingswii");
if ($connect) {
		echo "1. Conexion a la base de datos realizada con exito. <br />";
		echo "<br>";
}
		
$servername = "localhost";
$username = "norma";
$password = "norma";
$dbname = "ingswii";


echo "Los datos almacenados en la base son:"; 
echo "<br>";
echo "<br>";

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['Nombre']."<br/> ";
echo "- Apellido: ".$resultados['Apellido']."<br/>";
echo "- Codigo: ".$resultados['Codigo']."<br/>";
echo "- correo: ".$resultados['correo']."<br/>";

echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect($servername,$username,$password);
mysqli_select_db($link, $dbname);
$result = mysqli_query($link, "SELECT * FROM alumno ORDER BY codigo");
while ($fila = mysqli_fetch_array($result)){
echo $fila['Nombre']." - ".$fila['Apellido']." - ".$fila['Codigo']." - ".$fila['correo'];
echo "<br>";
echo "<br>";
}
?>

<H3>INGRESA EL NÚMERO DEL CODIGO DEL ANALISTA QUE DESEA ACTUALIZAR EL CORREO Y A CONTINUACIÓN COLOQUE LOS DATOS QUE DESEA ACTUALIZAR </H3>
<BR/>

<H3>EL CODIGO DEL ESTUDIANTE NO SE DEBE CAMBIAR</H3>
<BR>

<form action="update.php" method="POST"  NAME="form">
Codigo:<br>
      <input type "number"  name="Codigo"/> <br/><br/>
Nombres:<br>
      <input type "text"  name="Nombre"/> <br/><br/>
Apellidos:<br>	 
	  <input type "text"  name="Apellido"/> <br/><br/>
correo:<br>	 
	  <input type "text"  name="correo"/> <br/><br/>
	  
	   <br><br>
<input type="submit" value="Enviar datos"/>
<BR/>


 
<?php
ini_set('error_reporting',0);
$codigo = $_POST['Codigo']; 
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['correo']; 


//cambiamos el nombre del correo del primer registro
$result = mysqli_query($link, "UPDATE alumno SET Nombre ='$Nombre', Apellido ='$Apellido', correo ='$Correo' WHERE Codigo='$codigo'");
while ($fila = mysqli_fetch_array($result)){
echo $fila['Nombre']." - ".$fila['Apellido']." - ".$fila['Codigo']." - ".$fila['correo'];
echo "<br>";
echo "<br>";
}

mysqli_free_result($result);
mysqli_close($link);




?><br>
<input type="button" onclick="location='PanelCentral.php'" value="Regresar al inicio"/>
<body/>
<html/>