<?php  
  session_start();
  //Incluimos el archivo de conexion a la BD.
  include_once('config.php');

  if (!isset($_SESSION['active'])) {
    header("Location: login/login.php");
    exit();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



  <!-- Iconos de FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- CSS de nb -->
  <link rel="stylesheet" type="text/css" href="css/bg-main.css">

  <!-- CSS de contacto -->
  <link rel="stylesheet" href="css/contacto.css">

  <!-- CSS de citas -->
  <link rel="stylesheet" href="css/citas.css">

  <!-- Footer Personalizado -->
    <link rel="stylesheet" href="css/footer.css">

  <!--Icono de la pestaña -->
  <link rel="icon" href="img/logos/M.png">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estetica mari</title>

</head>
<body>
  <!-- Inicio del menu -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="usuario.php">
        <img src="img/logos/MariNG1.png" width="60" height="40" class="d-inline-block align-top" alt="Logo1">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown">
      <ul class="navbar-nav ml-lg mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="usuario.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-poll-h"></i> Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="manicura.php">Manicura</a>
              <a class="dropdown-item" href="pedicura1.php">Pedicura</a>
              <div class="dropdown dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="dropdown-layouts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Corte de cabello</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
                      <a class="dropdown-item" href="corte_m1.php">Mujer</a>
                      <a class="dropdown-item" href="corte_h1.php">Hombre</a>
                  </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria1.php"><i class="far fa-image"></i> Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto1.php"><i class="fas fa-id-card"></i> Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="citas1.php"><i class="far fa-calendar-alt"></i> Crear Cita</a>
          </li>
          <?php if ($_SESSION['ROLE'] == 'admin') { ?>
          <li class="nav-item">
            <a class="nav-link" href="sistema/index.php"><i class="fas fa-id-card-alt"></i> Admin</a>
          </li>
          <?php } ?>
        </ul>
        <strong class="text-white">Bienvenido: </strong> <p class="text-white mt-3 ml-1"><?php echo ($_SESSION['USERNAME']); ?></p>
            <a class="btn btn-danger ml-4" href="login/logout.php">Cerrar sesion</a>
    </div>
  </nav>
  <!-- Fin del menu -->

