<?php include_once "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['email']) || empty($_POST['telefono']) || empty($_POST['mensaje'])) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $query_insert = mysqli_query($conexion, "INSERT INTO contacto(nombre,apellidos,email,telefono,mensaje) values ('$nombre', '$apellidos', '$email','$telefono', '$mensaje')");
        if ($query_insert) {
            $alert = '<div class="alert alert-primary" role="alert">
                            Contacto registrada
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
        <a href="lista_contacto.php" class="btn btn-primary">Regresar</a>
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
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese correo" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" placeholder="Ingrese telefono" name="telefono" id="telefono">
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <input type="text" class="form-control" name="mensaje" id="mensaje">
                </div>
                
                <input type="submit" value="Guardar Contacto" class="btn btn-primary">
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>