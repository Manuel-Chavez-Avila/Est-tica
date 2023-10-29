<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$host='localhost';
		$username='root';
		$password='';
		$database='base1';
		$conexion = new mysqli($host, $username, $password, $database);
		$sql = "SELECT * FROM admins";
			if ($result=mysqli_query($conexion,$sql)) {
    		$rowcount=mysqli_num_rows($result); 
			}
		 ?>
		<a class="col-xl-3 col-md-6 mb-4" href="lista_usuarios.php">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Usuarios</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$conexion = new mysqli($host, $username, $password, $database);
		$sql = "SELECT * FROM cita";
			if ($result=mysqli_query($conexion,$sql)) {
    		$rowcount=mysqli_num_rows($result); 
			}
		 ?>
		<a class="col-xl-3 col-md-6 mb-4" href="lista_citas.php">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Citas</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<!-- Earnings (Monthly) Card Example -->
		<?php 
		$conexion = new mysqli($host, $username, $password, $database);
		$sql = "SELECT * FROM contacto";
			if ($result=mysqli_query($conexion,$sql)) {
    		$rowcount=mysqli_num_rows($result); 
			}
		 ?>
		<a class="col-xl-3 col-md-6 mb-4" href="lista_contacto.php">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Contactos</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $rowcount; ?></div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Configuración</h1>
	</div>
	<div class="row">
		
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header bg-primary text-white">
					Información Personal
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Nombre: <strong><?php echo $_SESSION['NAME']; ?></strong></label>
					</div>
					<div class="form-group">
						<label>Usuario: <strong><?php echo $_SESSION['USERNAME']; ?></strong></label>
					</div>
					<div class="form-group">
						<label>Correo: <strong><?php echo $_SESSION['EMAIL']; ?></strong></label>
					</div>
					<div class="form-group">
						<label>Rol: <strong><?php echo $_SESSION['ROLE']; ?></strong></label>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>