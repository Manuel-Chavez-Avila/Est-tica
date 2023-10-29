<?php
include "includes/header.php";
include "../conexiones/conexion.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['sexo']) || empty($_POST['telefono']) || empty($_POST['email']) || empty($_POST['fecha_cita']) || empty($_POST['servicio'])) {
    $alert = '<p class"msg_error">Todo los campos son requeridos</p>';
  } else {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fecha_cita = $_POST['fecha_cita'];
    $servicio = $_POST['servicio'];

    $sql_update = mysqli_query($conexion, "UPDATE cita SET nombre = '$nombre', apellidos = '$apellidos', sexo = '$sexo', telefono = '$telefono', email = '$email', fecha_cita = '$fecha_cita', servicio = '$servicio' WHERE id = $id");

    if ($sql_update) {
      $alert = '<p class"msg_save">Cita Actualizada correctamente</p>';
    } else {
      $alert = '<p class"msg_error">Error al Actualizar la Cita</p>';
    }
  }
}

// Mostrar Datos
if (empty($_REQUEST['id'])) {
  header("Location: lista_usuarios.php");
  mysqli_close($conexion);
}
$id = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM cita WHERE id = $id");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: lista_usuarios.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $id = $data['id'];
    $nombre = $data['nombre'];
    $apellidos = $data['apellidos'];
    $sexo = $data['sexo'];
    $telefono = $data['telefono'];
    $email = $data['email'];
    $fecha_cita = $data['fecha_cita'];
    $servicio = $data['servicio'];
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
          <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" value="<?php echo $sexo; ?>" class="form-control">
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="number" placeholder="Ingrese Teléfono" name="telefono" class="form-control" id="telefono" value="<?php echo $telefono; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" placeholder="Ingrese email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
          <label for="fecha_cita">Fecha de cita</label>
          <input type="datetime-local" class="form-control" name="fecha_cita" id="fecha_cita" value="<?php echo $fecha_cita; ?>">
        </div>
        <div class="form-group">
            <label for="servicio">Servicio</label>
            <select name="servicio" id="servicio" value="<?php echo $servicio; ?>" class="form-control mt-2">
                      <option>Servicios:</option>
                      <option>Corte de cabello para mujer  $150.00</option>
                      <option>Corte de cabello para hombre  $125.00</option>
                      <option>Manicura  $190.00</option>
                      <option>Pedicura  $190.00</option>
            </select>
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