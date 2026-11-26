<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* ---------- Menú lateral ---------- */
        .sidebar {
            width: 260px;
            background-color: #212529 !important;
            color: #fff;
        }

        /* En pantallas grandes queda fijo a la izquierda, a toda la altura */
        @media (min-width: 992px) {
            .sidebar {
                position: sticky;
                top: 0;
                height: 100vh;
                flex-shrink: 0;
                overflow-y: auto;
            }
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, .8);
            border-radius: .375rem;
            display: flex;
            align-items: center;
            gap: .75rem;
        }

        .sidebar .nav-link:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
        }

        .sidebar .nav-link.active {
            color: #fff;
            background-color: #0d6efd;
        }

        /* Submenús: sangría y letra un poco más pequeña */
        .sidebar .submenu .nav-link {
            padding-left: 2.75rem;
            font-size: .925rem;
        }

        /* Flecha que gira al abrir el submenú */
        .sidebar .flecha {
            margin-left: auto;
            transition: transform .2s;
        }

        .sidebar [aria-expanded="true"] .flecha {
            transform: rotate(90deg);
        }
    </style>
</head>
<body class="bg-light">

    <!-- Barra superior: solo en celular/tablet, con el botón que abre el menú -->
    <nav class="navbar navbar-dark bg-dark d-lg-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#menuLateral"
                    aria-controls="menuLateral" aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand mb-0 h1">Mi sistema</span>
        </div>
    </nav>

    <div class="d-flex">

        <!-- ================= MENÚ LATERAL ================= -->
        <aside class="sidebar offcanvas-lg offcanvas-start" tabindex="-1" id="menuLateral"
               aria-labelledby="tituloMenu">

            <!-- Encabezado visible solo cuando el menú se abre en celular -->
            <div class="offcanvas-header border-bottom border-secondary">
                <h5 class="offcanvas-title" id="tituloMenu">Mi sistema</h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="offcanvas" data-bs-target="#menuLateral"
                        aria-label="Cerrar"></button>
            </div>

            <div class="offcanvas-body flex-column p-3 h-100">

                <!-- Logo / nombre: solo en pantallas grandes -->
                <a href="#" class="d-none d-lg-flex align-items-center gap-2 mb-3 pb-3 text-white text-decoration-none border-bottom border-secondary">
                    <i class="bi bi-box-seam fs-4"></i>
                    <span class="fs-5 fw-semibold">Mi sistema</span>
                </a>

                <ul class="nav nav-pills flex-column gap-1 mb-auto" id="listaMenu">

                    <!-- Opción simple (sin submenú) -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>

                    <!-- Opción con submenú: Usuarios -->
                    <li class="nav-item">
                        <a class="nav-link" href="#subUsuarios" role="button"
                           data-bs-toggle="collapse" aria-expanded="false" aria-controls="subUsuarios">
                            <i class="bi bi-people"></i> Usuarios
                            <i class="bi bi-chevron-right flecha"></i>
                        </a>
                        <div class="collapse" id="subUsuarios" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 submenu">
                                <li><a class="nav-link" href="#">Listar usuarios</a></li>
                                <li><a class="nav-link" href="#">Registrar usuario</a></li>
                                <li><a class="nav-link" href="#">Roles</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Reportes -->
                    <li class="nav-item">
                        <a class="nav-link" href="#subReportes" role="button"
                           data-bs-toggle="collapse" aria-expanded="false" aria-controls="subReportes">
                            <i class="bi bi-bar-chart"></i> Reportes
                            <i class="bi bi-chevron-right flecha"></i>
                        </a>
                        <div class="collapse" id="subReportes" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 submenu">
                                <li><a class="nav-link" href="#">Diario</a></li>
                                <li><a class="nav-link" href="#">Mensual</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Configuración -->
                    <li class="nav-item">
                        <a class="nav-link" href="#subConfig" role="button"
                           data-bs-toggle="collapse" aria-expanded="false" aria-controls="subConfig">
                            <i class="bi bi-gear"></i> Configuración
                            <i class="bi bi-chevron-right flecha"></i>
                        </a>
                        <div class="collapse" id="subConfig" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 submenu">
                                <li><a class="nav-link" href="#">Áreas</a></li>
                                <li><a class="nav-link" href="#">Cargos</a></li>
                                <li><a class="nav-link" href="#">Centros</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- Pie del menú: usuario y salir -->
                <div class="border-top border-secondary pt-3 mt-3">
                    <div class="d-flex align-items-center gap-2 mb-2 px-2 small text-white-50">
                        <i class="bi bi-person-circle fs-5"></i>
                        <!-- En PHP: <?= htmlspecialchars($_SESSION['loguinUsuSesion']) ?> -->
                        <span>Nombre del usuario</span>
                    </div>
                    <!-- Ajusta la ruta a tu archivo de login -->
                    <a class="nav-link" href="login.php?opcion=salir">
                        <i class="bi bi-box-arrow-right"></i> Salir
                    </a>
                </div>
            </div>
        </aside>

        <!-- ================= CONTENIDO ================= -->
        <main class="flex-grow-1 p-4">
            <h1 class="h3">Contenido de la página</h1>
            <p class="text-muted">Aquí va el contenido de cada pantalla.</p>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
