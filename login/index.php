<?php 
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "Debes iniciar sesión.";
		header('location: login.php');
	}
	//Destrucción  o cierrede la Sesión
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homepage Bienvenida</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<h2>¡Bienvenida!</h2>
	</div>
	<div class="content">
		<!--Mensaje de notificación -->
		<?php if (isset($_SESSION['success'])) :?>
			<div class="error sucess">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>	
			<?php endif ?>	
		<!-- Información del usuario registrado-->
		<?php if (isset($_SESSION['username'])) :?>
			<p>Bienvenido: <strong> <?php echo $_SESSION['username']; ?></strong></p>
			<p>
				<a href="index.php?logout='1'" style="color:red;">Salir</a>
			</p>
		<?php endif ?>
	</div>
</body>
</html>
