<?php
	//La estructura de conectar una base de datos es asi:
	//1. Servidor, 2. Usuario de la BD, 3. La contraseña y 4. Nombre de la BD

	$conexion= mysqli_connect("localhost", "root", "", "base1");
	if (mysqli_connect_errno()) {
	 	echo "Conexion fallida: ", mysqli_connect_errno();
	 	exit();
	 } 
?>