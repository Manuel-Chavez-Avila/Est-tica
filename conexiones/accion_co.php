<?php

	include("conexion.php");

	if (isset($_POST['registrar'])) {
		if (strlen($_POST['nombre']) >=1 && strlen($_POST['email']) >=1){
			$nombre= trim($_POST['nombre']);
			$apellidos= trim($_POST['apellidos']);
			$email= trim($_POST['email']);
			$telefono= trim($_POST['telefono']);
			$mensaje= trim($_POST['mensaje']);
			$fechareg= date("y/m/d");
			$consulta= "INSERT INTO contacto(nombre, apellidos, email, telefono, mensaje, fecha_reg) VALUES('$nombre', '$apellidos','$email','$telefono','$mensaje','$fechareg')";
			$resultado=mysqli_query($conexion, $consulta);
						if ($resultado) {
				 if (!isset($_SESSION['active'])) {
				    echo '<script language="javascript">alert("Tu contacto ha sido creado existosamente");window.location.href="citas.php"</script>';
				    exit();
				  }else{
				  	echo '<script language="javascript">alert("Tu contacto ha sido creado existosamente");window.location.href="citas1.php"</script>';
				  }
			}
		}	
	}
?>