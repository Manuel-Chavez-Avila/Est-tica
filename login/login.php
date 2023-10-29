<?php 

	session_start();
	if (isset($_SESSION['active'])) {
		header("Location: index.php");
		exit();
	}
	//Agregamos el archivo de conexion a la base de datos
	include_once('../config.php');

	if (isset($_POST['submit'])) {
		$errorMsg="";
		$username = $con->real_escape_string($_POST['username']);
		$password = $con->real_escape_string(md5($_POST['password']));

		if (!empty($username) || !empty($password)) {
			$query="SELECT * FROM admins WHERE username = '$username' AND password='$password'";
			$result= $con->query($query);
			if ($result->num_rows > 0) {
				$row=$result->fetch_assoc();
				$_SESSION['active'] = true;
				$_SESSION['ID'] = $row['id'];
				$_SESSION['ROLE'] = $row['role'];
				$_SESSION['NAME'] = $row['name'];
				$_SESSION['USERNAME'] = $row['username'];
				$_SESSION['EMAIL'] = $row['email'];
				header("Location: ../usuario.php");
				die();
			}else{
				$errorMsg = "El usuario o la contraseña son incorrectas";
			}
			
		}	
	}	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio de sesion de aplicacion Multiusuario basado en Roles</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="../css/bg-main.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</head>
<body>
	<!-- Inicio de contenidos -->
    <div class="container-fluid py-5">
          <div class="row" id="cita">
            <div class="container">
              <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="POST">
                      	<div class="header text-white">
  							<h2>Iniciar Sesión</h2>
  						 </div>
  						 <?php if (isset($errorMsg)) { ?>
							<div class="alert alert-danger alert-dissmissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $errorMsg; ?>
							</div>
						<?php } ?>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Nombre de Usuario:</label>
                              <input type="text" class="form-control" name="username" placeholder="Escribir el username" required>
                              <i class="uil uil-envelope icon"></i>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Contraseña:</label>
                              <input type="password" class="form-control" name="password" placeholder="Escribir la password" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <button type="submit" name="submit" class="btn btn-primary btn-block hola2" value="Entrar!">Entrar</button>
                          </div>
                          <p style="color: white; text-align: center;">
  							¿No eres usuario registrado? <a href="register.php"><strong>Registrarme</strong></a>
  					       </p>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div> 
    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>