<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	<!-- Iconos de FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- CSS de nb -->
	<link rel="stylesheet" type="text/css" href="css/bg-main.css">

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
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="administrador.php">
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
              <a class="dropdown-item" href="avina.html">Manicure</a>
              <a class="dropdown-item" href="pravana.html">Pedicure</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="far fa-image"></i> Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-id-card"></i> Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="far fa-calendar-alt"></i> Crear Cita</a>
          </li>
        </ul>
        <a href="usuario.php"><button type="submit" class="btn btn-outline-success my-1 my-sm-0" >Login</button></a>
    </div>
  </nav>
	<!-- Fin del menu -->

	<!-- Inicio de contenidos -->
  <?php include("include/bienvenida.php") ?>
  <!-- fin de contenidos -->

  <!-- Inicio del Footer -->
    <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>company</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our service</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
             <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
              </ul>
            </div>
             <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="footer text-white" style="padding-left: 20px;">
            <p class="texto pie">Diseñado y maquetado por: Francisco Amigon. &copy; 2022</p>
            <p class="texto">Contactar a: <a href="mailto:20307007@utcgg.edu.mx">Administrador del Sitio. </a></p>
            <p class="texto">
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                  <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="¡CSS Válido!"/>
                </a>
            </p>
          </div>
        </div> 
    </footer>
    <!-- Fin del Footer -->

</body>
</html>