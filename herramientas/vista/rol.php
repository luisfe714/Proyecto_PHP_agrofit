<?php require_once '../include/antiIntruccion_and_Testin.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>GYM-Sena</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php require_once 'head.php'; ?> 		
	</head>
	<body class="bg-light" oncontextmenu="return false" onkeydown="return false">		
		<?php require_once 'hederMenu.php'; ?> 
		<!-- ================= INICIO CONTENIDO DE CADA PAGINA ================= -->
			<main class="col p-4 min-vh-100">
				<h1 class="h3">FORMULARIO DE INGRESO ROL</h1>
				<div class="card shadow-sm mt-4">
					<div class="card-body">
						<div class="row g-2 align-items-end">
							<div class="col-md-8">
								<label for="txtRutina" class="form-label">Nombre de la maquina</label>
								<!-- stopPropagation permite escribir aunque el body tenga onkeydown="return false" -->
								<input type="text" class="form-control" id="txtRutina" name="txtRutina"
									   placeholder="Escriba el nombre de la rutina" onkeydown="event.stopPropagation()">
							</div>
							<div class="col-md-4 d-grid gap-2">
									<!--inicio de botones-->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMaquinas">
									Nueva maquina
								</button>
								<button type="button" class="btn btn-primary">
									Buscar
								</button>
								<!--cierre de botones-->
									<div class="modal fade" id="modalMaquinas" tabindex="-1" aria-labelledby="modalMaquinasLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalMaquinasLabel">Modal de Maquinas</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
												</div>
												<div class="modal-body">
													<div class="mb-3"> 
														<label for="recipient-name" class="col-form-label">Nombre de la maquina:</label>
														<input type="text" id="recipient-name" name="recipient-name" class="form-control" style="cursor:pointer;" >
													</div>
													<div class="mb-3"> 
														<label for="recipient-name" class="col-form-label">Descripción:</label>
														<input type="text" id="recipient-name" name="recipient-name" class="form-control" style="cursor:pointer;" >
													</div>
													<div class="mb-3"> 
														<label for="recipient-name" class="col-form-label">Estado:</label>
														<input type="text" id="recipient-name" name="recipient-name" class="form-control" style="cursor:pointer;" >
													</div>
													<div class="mb-3"> 
														<label for="recipient-name" class="col-form-label">Area:</label>
														<input type="text" id="recipient-name" name="recipient-name" class="form-control" style="cursor:pointer;" >
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="button" class="btn btn-primary">Guardar cambios</button>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div> 
				</div>
			</main>
		<!-- ================= CIERRE CONTENIDO DE CADA PAGINA ================= -->
		<?php require_once 'fooderMenu.php'; ?> 
	</body>
</html>