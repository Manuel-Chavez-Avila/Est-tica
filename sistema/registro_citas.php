<?php include_once "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['sexo']) || empty($_POST['telefono']) || empty($_POST['email']) || empty($_POST['fecha_cita']) || empty($_POST['servicio'])) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $sexo = $_POST['sexo'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $fecha_cita = $_POST['fecha_cita'];
        $servicio = $_POST['servicio'];

        $query_insert = mysqli_query($conexion, "INSERT INTO cita(nombre,apellidos,sexo,telefono,email,fecha_cita,servicio) values ('$nombre', '$apellidos', '$sexo', '$telefono', '$email', '$fecha_cita', '$servicio')");
        if ($query_insert) {
            $alert = '<div class="alert alert-primary" role="alert">
                            Cita registrada
                        </div>';
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                    Error al registrar
                </div>';
        
        }
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="lista_citas.php" class="btn btn-primary">Regresar</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="" method="post" autocomplete="off">
                <?php echo isset($alert) ? $alert : ''; ?>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese nombre completo" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" placeholder="Ingrese apellidos" name="apellidos" id="apellidos">
                </div>
                <div class="form-group">
                  <label for="sexo">Sexo</label>
                  <select name="sexo" id="sexo" class="form-control">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" placeholder="Ingrese telefono" name="telefono" id="telefono">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese correo" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="fecha_cita">Fecha de cita</label>
                    <input type="datetime-local" class="form-control" name="fecha_cita" id="fecha_cita">
                </div>
                <div class="form-group">
                    <label for="servicio">Servicio</label>
                    <select name="servicio" id="servicio" class="form-control mt-2">
                              <option>Servicios:</option>
                              <option>Corte de cabello para mujer  $150.00</option>
                              <option>Corte de cabello para hombre  $125.00</option>
                              <option>Manicura  $190.00</option>
                              <option>Pedicura  $190.00</option>
                    </select>
                </div>
                <input type="submit" value="Guardar Cita" class="btn btn-primary">
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>