<?php
/*
Formas de conectar PHP con una BD MySQL
elaborado por WillyMEN
*/
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

?>