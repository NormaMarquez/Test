<html>
<body bgcolor="grey" align="center">
<?php
$connect=mysqli_connect("localhost", "norma", "norma", "ingswii");
if ($connect) {
		echo "1. Conexion a la base de datos realizada con exito. <br />";
		echo "<br>";
		$Nombre= $_POST ['Nombre'];
		$Apellido= $_POST ['Apellido'];
		$Codigo= $_POST ['Codigo'];
		$correo= $_POST ['correo'];
		
		$consulta="INSERT INTO alumno values ('$Nombre','$Apellido','$Codigo','$correo')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "2. Información almacenada con exito. <br />";
			echo "<br>";
		}
		else {
			echo "2. Error en la ejecución de la consulta. <br />";
			echo "<br>";
		}
		
		if (mysqli_close($connect)){ 
			echo "3. Desconexion realizada con exito. <br />";
			echo "<br>";
		} 
		else {
			echo "3. Error en la desconexión";
			echo "<br>";
		}
}
$servername = "localhost";
$username = "norma";
$password = "norma";
$dbname = "ingswii";

echo "**********************************";
echo "<br>";
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
mysqli_free_result($result);
mysqli_close($link);




?>
<br><br>

<body/>
<html/>
