<?php
$conexion = new mysqli("localhost", "root", "password", "database");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $mysqli->connect_error;
}
echo $conexion->host_info . "<br>";
echo "CONECTADO con la primera opción <br>";

$conexion2 = new mysqli("127.0.0.1", "root", "password", "database", 3306);
if ($conexion2->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $conexion2->host_info . "<br>";
echo "CONECTADO con la segunda opción<br>";


$borratabla="DROP TABLE IF EXISTS gente;";

$resultborr=mysqli_query ($conexion, $borratabla);

if(!$borratabla){
	echo "Error al borrar la Tabla <br>";
}
else{
	echo "Tabla borrada <br>";	
}

$create="CREATE TABLE gente (nombre VARCHAR(40), fecha DATE);";

$resultcrea= mysqli_query ($conexion, $create);

if(!$resultcrea){
	echo "Error al crear <br>";
}
	
else{
	echo "Tabla creada <br>";	
}
	
$insertar="INSERT INTO gente VALUES ('Fulano', '1974-04-12');";

$resultado= mysqli_query ($conexion, $insertar);

if(!$resultado){
	echo "Error al insertar";
}
else{
	echo "Datos insertados";	
}
	
$consulta= "SELECT * FROM gente;"

$resultset=mysqli_query ($conexion, $consulta);

echo "Los datos obtenidos de la BD son <br>";
echo resulset;






?>