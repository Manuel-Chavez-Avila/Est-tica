<?php
include "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['email']) || empty($_POST['telefono']) || empty($_POST['mensaje'])) {
    $alert = '<p class"msg_error">Todo los campos son requeridos</p>';
  } else {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $sql_update = mysqli_query($conexion, "UPDATE contacto SET nombre = '$nombre', apellidos = '$apellidos', email = '$email', telefono = '$telefono', mensaje = '$mensaje' WHERE id = $id");

    if ($sql_update) {
      $alert = '<p class"msg_save">Contacto Actualizada correctamente</p>';
    } else {
      $alert = '<p class"msg_error">Error al Actualizar el Contacto</p>';
    }
  }
}

// Mostrar Datos
if (empty($_REQUEST['id'])) {
  header("Location: lista_contacto.php");
  mysqli_close($conexion);
}
$id = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM contacto WHERE id = $id");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_contacto.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id = $data['id'];
    $nombre = $data['nombre'];
    $apellidos = $data['apellidos'];
    $email = $data['email'];
    $telefono = $data['telefono'];
    $mensaje = $data['mensaje'];
  }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-6 m-auto">
      <?php echo isset($alert) ? $alert : ''; ?>
      <form class="" action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label for="nombre">Nombre Completo</label>
          <input type="text" placeholder="Ingrese nombre completo" name="nombre" class="form-control" id="nombre" value="<?php echo $nombre; ?>">
        </div>
        <div class="form-group">
          <label for="apellidos">apellidos</label>
          <input type="text" placeholder="Ingrese apellidos" name="apellidos" class="form-control" id="apellidos" value="<?php echo $apellidos; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" placeholder="Ingrese email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="number" placeholder="Ingrese Teléfono" name="telefono" class="form-control" id="telefono" value="<?php echo $telefono; ?>">
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <input type="mensaje" placeholder="Ingrese mensaje" name="mensaje" class="form-control" id="mensaje" value="<?php echo $mensaje; ?>">
        </div>
        <input type="submit" value="Editar Cita" class="btn btn-primary">
      </form>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once "includes/footer.php"; ?>