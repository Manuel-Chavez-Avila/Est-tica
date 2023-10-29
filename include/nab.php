<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  
  <!-- Iconos de FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- CSS de nb -->
  <link rel="stylesheet" type="text/css" href="css/bg-main.css">

  <!-- Footer Personalizado -->
  <link rel="stylesheet" href="css/footer.css">

  <!--Icono de la pestaña -->
  <link rel="icon" href="img/logos/M.png">

  <!-- CSS de contacto -->
  <link rel="stylesheet" href="css/contacto.css">

  <!-- CSS de citas -->
  <link rel="stylesheet" href="css/citas.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estetica mari</title>

</head>
<body>
  <!-- Inicio del menu -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="index.php">
        <img src="img/logos/MariNG2.png" width="40" height="40" class="d-inline-block align-top" alt="Logo1">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown">
      <ul class="navbar-nav ml-lg mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-poll-h"></i> Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="manicura.php">Manicura</a>
              <a class="dropdown-item" href="pedicura.php">Pedicura</a>
              <div class="dropdown dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="dropdown-layouts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Corte de cabello</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
                      <a class="dropdown-item" href="corte_m.php">Mujer</a>
                      <a class="dropdown-item" href="corte_h.php">Hombre</a>
                  </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.php"><i class="far fa-image"></i> Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php"><i class="fas fa-id-card"></i> Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="citas.php"><i class="far fa-calendar-alt"></i> Crear Cita</a>
          </li>
        </ul>
        <a href="login/login.php"><button type="submit" class="btn btn-outline-success my-1 my-sm-0" >Login</button></a>
    </div>
  </nav>
  <!-- Fin del menu -->