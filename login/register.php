<?php
	include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Sistema de Registro de PHP y MySQL</title>
	<!-- <link rel="stylesheet" href="css/style.css">-->

	<!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../css/bg-main.css">
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
  							           <h2>Registrar</h2>
  						          </div>
                      <?php include('errors.php');?>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Nombre completo:</label>
                              <input type="text" name="name" value="<?php echo $name; ?>" class="form-control mt-2 hola"  placeholder="Nombre completo" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Nombre de Usuario:</label>
                              <input type="text" name="username" value="<?php echo $username; ?>" class="form-control mt-2 hola"  placeholder="Nombre de usuario" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Email:</label>
                              <input type="text" name="email" value="<?php echo $email; ?>" class="form-control mt-2 hola" placeholder="Email" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Contraseña:</label>
                              <input type="password" name="password_1" class="form-control mt-2 hola" placeholder="Contraseña" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="font-weight-bold text-white">Confirmar Contraseña:</label>
                              <input type="password" name="password_2" class="form-control mt-2 hola" placeholder="Confirmar contraseña" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <button class="btn btn-primary btn-block hola2" type="submit" name="reg_admins">Registrarse</button>
                          </div>
                          <p style="color: white;">
  							           ¿Ya eres usuario? <a href="login.php"><strong>Iniciar Sesion</strong></a>
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