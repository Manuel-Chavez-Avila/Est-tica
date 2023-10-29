<?php
if (!empty($_GET['id'])) {
    require("../conexiones/conexion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM cita WHERE id = $id");
    mysqli_close($conexion);
    header("location: lista_citas.php");
}
?>