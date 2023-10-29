﻿<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
		<a href="registro_usuario.php" class="btn btn-primary">Nuevo Usuario</a>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Id</th>
							<th>Nombre completo</th>
							<th>Username</th>
							<th>Email</th>
							<th>Role</th>
							<th>fecha de creacion</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexiones/conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM admins");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['id']; ?></td>
									<td><?php echo $data['name']; ?></td>
									<td><?php echo $data['username']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['role']; ?></td>
									<td><?php echo $data['created']; ?></td>
									<td>
										<a href="editar_usuario.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i> Editar</a>
										<form action="eliminar_usuario.php?id=<?php echo $data['id']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
										</form>
									</td>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>