<?php

	include("conexion.php");

	if (isset($_POST['registrar'])) {
		if (strlen($_POST['nombre']) >=1 && strlen($_POST['email']) >=1){
			$nombre= trim($_POST['nombre']);
			$apellidos= trim($_POST['apellidos']);
			$sexo= trim($_POST['sexo']);
			$telefono= trim($_POST['telefono']);
			$email= trim($_POST['email']);
			$fecha_cita= trim($_POST['fecha_cita']);
			$servicio= trim($_POST['servicio']);
			$fechareg= date("y/m/d");
			$consulta= "INSERT INTO cita(nombre, apellidos, sexo, telefono, email, fecha_cita, servicio, fecha_reg) VALUES('$nombre', '$apellidos', '$sexo', '$telefono', '$email', '$fecha_cita', '$servicio', '$fechareg')";
			$resultado=mysqli_query($conexion, $consulta);
			if ($resultado) {
				 if (!isset($_SESSION['active'])) {
				    echo '<script language="javascript">alert("Tu cita ha sido creada existosamente");window.location.href="citas.php"</script>';
				    exit();
				  }else{
				  	echo '<script language="javascript">alert("Tu cita ha sido creada existosamente");window.location.href="citas1.php"</script>';
				  }
			}
		}	
	}
?>