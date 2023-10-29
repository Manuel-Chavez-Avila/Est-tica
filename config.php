<?php 
	//Configuracion de la base de datos

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="base1";

	//Crear la conexion a la base de datos
	$con=new mysqli($hostname, $username, $password, $dbname);
	//Verificamos la conexion a la BD
	if ($con->connect_error) {
		die("Conexion fallida: " . $con->connect_error);
	}

?>