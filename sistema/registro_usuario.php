<?php include_once "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['role'])) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];

        $query = mysqli_query($conexion, "SELECT * FROM admins where email = '$email'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                        El correo ya existe
                    </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO admins(name,username,email,password,role) values ('$name', '$username', '$email', '$password', '$role')");
            if ($query_insert) {
                $alert = '<div class="alert alert-primary" role="alert">
                            Usuario registrado
                        </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                        Error al registrar
                    </div>';
            }
        }
    }
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
        <a href="lista_usuarios.php" class="btn btn-primary">Regresar</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="" method="post" autocomplete="off">
                <?php echo isset($alert) ? $alert : ''; ?>
                <div class="form-group">
                    <label for="name">Nombre completo</label>
                    <input type="text" class="form-control" placeholder="Ingrese nombre completo" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Ingrese nombre de usuario" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="password" id="password">
                </div>
                <div class="form-group">
                  <label for="role">Rol</label>
                  <select name="role" id="role" class="form-control">
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuario</option>
                  </select>
                </div>
                <input type="submit" value="Guardar usuario" class="btn btn-primary">
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>