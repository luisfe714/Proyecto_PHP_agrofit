		<nav class="navbar navbar-dark bg-dark d-lg-none py-1">
			<div class="container-fluid">
				<button class="navbar-toggler p-1" type="button"
						data-bs-toggle="offcanvas" data-bs-target="#menuLateral"
						aria-controls="menuLateral" aria-label="Abrir menú">
					<span class="navbar-toggler-icon"></span>
				</button>

				<button type="button" id="opSalir1" name="opSalir1" title="opcion salir" class="btn btn-primary btn-sm ms-auto">
					<?= e($_SESSION['loginUsuSesion'] ?? '') ?> - Salir - <i class="bi bi-box-arrow-right"></i>
				</button>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">

				<!-- ================= MENÚ LATERAL ================= -->
				<div class="col-lg-3 col-xl-2 bg-dark p-0">
					<aside class="offcanvas-lg offcanvas-start text-bg-dark sticky-lg-top" tabindex="-1" id="menuLateral" aria-labelledby="tituloMenu">
						<div class="offcanvas-header border-bottom border-secondary">
							<h5 class="offcanvas-title ms-2 me-auto" id="tituloMenu">
								<img src="../../img/logoSenaFN.png" alt="SENA" width='50px' height="50px">
								<span class="fs-5 fw-semibold">GYM - Sena</span>
							</h5>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"	data-bs-target="#menuLateral" aria-label="Cerrar">
							</button>
						</div>
						<div class="offcanvas-body flex-column p-3">
							<a href="#" class="d-none d-lg-flex align-items-center gap-2 mb-3 pb-3 text-white text-decoration-none border-bottom border-secondary">
								<img src="../../img/logoSenaFN.png" alt="SENA" width='50px' height="50px">
								<span class="fs-5 fw-semibold">AGROFIT - Sena</span>
							</a>
							<ul class="nav nav-pills flex-column gap-1" id="listaMenu">
								<li class="nav-item">
									<a class="nav-link active d-flex align-items-center gap-2" href="#">
										<i class="bi bi-house-door"></i> &nbsp Inicio
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white d-flex align-items-center gap-2" href="#subUsuarios"
									   role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="subUsuarios">
										<i class="bi bi-people"></i> Usuarios
										<i class="bi bi-chevron-down ms-auto small"></i>
									</a>
									<div class="collapse" id="subUsuarios" data-bs-parent="#listaMenu">
										<ul class="nav flex-column ms-4 small">
											<li><a class="nav-link text-white-50" href="usuarios.php">Usuarios</a></li>
											<li><a class="nav-link text-white-50" href="rol.php">Roles</a></li>
											<li><a class="nav-link text-white-50" href="areas.php">Areas</a></li>
											<li><a class="nav-link text-white-50" href="rutinas.php">Rutinas</a></li>
											<li><a class="nav-link text-white-50" href="inventario.php">Inventario</a></li>
											<li><a class="nav-link text-white-50" href="reportes.php">Reportes</a></li>
											<li><a class="nav-link text-white-50" href="ejercicios.php">Ejercicios</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white d-flex align-items-center gap-2" href="#subReportes"
									   role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="subReportes">
										<i class="bi bi-bar-chart"></i> Reportes
										<i class="bi bi-chevron-down ms-auto small"></i>
									</a>
									<div class="collapse" id="subReportes" data-bs-parent="#listaMenu">
										<ul class="nav flex-column ms-4 small">
											<li><a class="nav-link text-white-50" href="#">Diario</a></li>
											<li><a class="nav-link text-white-50" href="#">Mensual</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white d-flex align-items-center gap-2" href="#subConfig"
									   role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="subConfig">
										<i class="bi bi-gear"></i> Configuración
										<i class="bi bi-chevron-down ms-auto small"></i>
									</a>
									<div class="collapse" id="subConfig" data-bs-parent="#listaMenu">
										<ul class="nav flex-column ms-4 small">
											<li><a class="nav-link text-white-50" href="#">Roles</a></li>
										</ul>
									</div>
								</li>
							</ul>
							<div class="border-top border-secondary pt-3 mt-3">
								<div class="d-flex align-items-center gap-2 mb-2 px-3 small text-white-50">
									<i class="bi bi-person-circle fs-5"></i>
									<span><?= e($_SESSION['loginUsuSesion'] ?? '') ?></span>
								</div>
								<button type="button" id="opSalir2" name="opSalir2" title="opcion salir" class="btn btn-primary w-100 text-start">
									<i class="bi bi-box-arrow-right"></i> &nbsp Salir
								</button>
							</div>
						</div>
					</aside>
				</div>