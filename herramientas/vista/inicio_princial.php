<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MENU PRINCIPAL</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/css/adminlte.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" style="height:100vh">
				<div class="col-2 col-sm-2 col-xl-2 bg-dark"> 
					<nav class="navbar bg-dark border-bottom border-white" data-bs-theme="dark">
						<div class="container-fluid">
							<a class="navbar-brand" href="menu.php">
								<h1 class="text-center">
									<img src="img/senalogo.png" style='max-width: 40px; height: 40px;'alt=""> ARC
								</h1> 
							</a>
						</div>
					</nav>
					<nav class="nav flex-column">                
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="programas.php">Registrar Programa</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#">Usuarios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Asignacion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Asignacion1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Asignacion2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Asignacion3</a>
							</li>						
							<li class="nav-item">
								<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">evaluacion</a>
							</li>
						</ul>
					</nav>   
				</div>
				<div class="col-9 col-sm-9 col-xl-10 p-0 m-0">
					<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">							
								<div class="info-box">
									<div class="info-box-content">
										<a class="nav-link" href="loguinControl.php?opcion=salir">
											Salir
										</a>				
									</div>
								</div>
							</li>
						</ul>
					</nav>
					-->
					<nav class="navbar navbar-expand-lg bg-body-tertiary">

						<ul class="navbar-nav ms-auto">
							<li class="nav-item">                           
								<div class="info-box">
									<div class="info-box-content">
										<?php session_start();	echo $_SESSION['loginUsuSesion']; ?>
									</div>
								</div>
							</li>						
							<li class="nav-item">                           
								<div class="info-box">
									<div class="info-box-content">
										<a class="btn btn-danger" href="../controlador/loginControl.php?opcion=salir">
											&nbsp&nbsp&nbsp&nbspSalir&nbsp&nbsp&nbsp&nbsp
										</a>
									</div>
								</div>
							</li>
						</ul>
					</nav>				
				</div>	
			</div>
			<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/js/adminlte.min.js"></script>
		</div>		
	</body>
</html>