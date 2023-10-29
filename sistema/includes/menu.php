<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<img src="../img/logos/mariNG2.png" width="40" height="40" class="img-thumbnail">
		</div>
		<div class="sidebar-brand-text mx-3">Admin</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Clientes Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContactos" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-clipboard-list"></i>
			<span>Contactos</span>
		</a>
		<div id="collapseContactos" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_contacto.php">Nuevo Contacto</a>
				<a class="collapse-item" href="lista_contacto.php">Contactos</a>
			</div>
		</div>
	</li>
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCitas" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-users"></i>
			<span>Citas</span>
		</a>
		<div id="collapseCitas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="registro_citas.php">Nueva Cita</a>
				<a class="collapse-item" href="lista_citas.php">Citas</a>
			</div>
		</div>
	</li>
		<!-- Nav Item - Usuarios Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-user"></i>
				<span>Usuarios</span>
			</a>
			<div id="collapseUsuarios" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="registro_usuario.php">Nuevo Usuario</a>
					<a class="collapse-item" href="lista_usuarios.php">Usuarios</a>
				</div>
			</div>
		</li>


</ul>