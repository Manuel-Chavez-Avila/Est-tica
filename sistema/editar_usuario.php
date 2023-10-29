<?php
include "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['role'])) {
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $sql_update = mysqli_query($conexion, "UPDATE admins SET name = '$name', username = '$username' , email = '$email', password = '$password', role = '$role' WHERE id = $id");
    $alert = '<p>Usuario Actualizado</p>';
  }
}

// Mostrar Datos
if (empty($_REQUEST['id'])) {
  header("Location: lista_usuarios.php");
  mysqli_close($conexion);
}
$id = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM admins WHERE id = $id");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_usuarios.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id = $data['id'];
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $role = $data['role'];
  }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6 m-auto">
      <form class="" action="" method="post">
        <?php echo isset($alert) ? $alert : ''; ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label for="name">Nombre completo</label>
          <input type="text" placeholder="Ingrese nombre completo" class="form-control" name="name" id="name" value="<?php echo $name; ?>">

        </div>
        <div class="form-group">
          <label for="username">Nombre de usuario</label>
          <input type="text" placeholder="Ingrese nombre de usuario" class="form-control" name="username" id="username" value="<?php echo $username; ?>">

        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" placeholder="Ingrese correo" class="form-control" name="email" id="email" value="<?php echo $email; ?>">

        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" placeholder="Ingrese password" class="form-control" name="password" id="password" value="<?php echo $password; ?>">

        </div>
        <div class="form-group">
          <label for="role">Rol</label>
          <select name="role" id="role" value="<?php echo $role; ?>" class="form-control">
            <option value="admin" >Administrador</option>
            <option value="usuario">Usuario</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar Usuario</button>
      </form>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>