<?php

//Primera forma de conexión
$conexion = new mysqli("localhost", "root", "password", "database");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $mysqli->connect_error;
}
else{
	echo $conexion->host_info . "<br>";
	echo "CONECTADO con la primera opción <br>";
}

//Segunda forma de conexión

$conexion2 = new mysqli("127.0.0.1", "root", "password", "database", 3306);
if ($conexion2->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	echo $conexion2->host_info . "<br>";
	echo "CONECTADO con la segunda opción<br>";
}

//cierra la conexion
mysqli_close($conexion2);

//sql query de borrado
$borratabla="DROP TABLE IF EXISTS gente;";

$resultborr=mysqli_query ($conexion, $borratabla);

if(!$borratabla){
	echo "Error al borrar la Tabla <br>";
}
else{
	echo "Tabla borrada <br>";	
}
//SQL query de creación de tabla
$create="CREATE TABLE gente (nombre VARCHAR(40), fecha DATE);";

$resultcrea= mysqli_query ($conexion, $create);

if(!$resultcrea){
	echo "Error al crear <br>";
}
	
else{
	echo "Tabla creada <br>";	
}


//Borrado de BD

$dropDBif="DROP DATABASE IF EXISTS pweb02;";
$resultCDBdel= mysqli_query ($conexion, $dropDBif);	
if(!$resultCDBdel){
	echo "Error al borrar la BD<br>";
}
else{
	echo "BD borrada<br>";	
}


//Creación de BD	
$createDB="CREATE DATABASE pweb02";	

$resultCDB= mysqli_query ($conexion, $createDB);	
if(!$resultCDB){
	echo "Error al crear la BD<br>";
}
else{
	echo "BD creada<br>";	
}
	
	
//SQL query de inserción de datos	
$insertar="INSERT INTO gente VALUES ('WILLIAM', '1969-6-9');";
$resultado= mysqli_query ($conexion, $insertar);

if(!$resultado){
	echo "Error al insertar";
}
else{
	echo "Datos insertados<br>";	
}

$insertar2="INSERT INTO gente VALUES ('DONALD', '1870-2-10')";
$resultado2= mysqli_query ($conexion, $insertar2);

if(!$resultado2){
	echo "Error al insertar2";
}
else{
	echo "Datos insertados2<br>";	
}


//Como realizar una consulta -... TAREA
$consulta= "SELECT nombre FROM gente;";

$resultset=mysqli_query ($conexion, $consulta);



echo "Los datos obtenidos de la BD son <br>";
//echo $resultset;

//como realizar una actualización....

//$actualiza="UPDATE ......"; ????

mysqli_close($conexion);


//mysqli_close($conexion2);
?>