<!DOCTYPE html>
<html lang="en">

<head>
    <title>Luis Lara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="herramientas/styles/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="herramientas/js/login.js?v=<?= filemtime(__DIR__ . '/herramientas/js/login.js') ?>"></script>
</head>

<body>
    <section class="ftco-section">
        <div class="cl-container">
            <div class="cl-row cl-justify-content-center">
                <!--<div class="cl-col-md-6 cl-text-center cl-mb-5">
                    <h2 class="heading-section">Inicio de sesion</h2>
                </div>-->
            </div>
            <div class="cl-row cl-justify-content-center">
                <div class="cl-col-md-7 cl-col-lg-5">
                    <div class="login-wrap cl-p-4 cl-p-md-5">
                        <div class="cl-d-flex cl-align-items-center cl-justify-content-center">
                            <img src="img/logoSena.png" style="height: 140px; width: auto;"/>
                        </div>
                        <div class="cl-col-md-1 cl-text-center cl-mb-1"></div>
                        <h1 class="heading-section">CENTRO AGROPECUARIO</h1>
                                            <div class="cl-form-group">
                        <input type="email" id='correoUsuario' name='correoUsuario' title='Digite su correo'
                            style='cursor:pointer' class="cl-form-control cl-rounded-left" placeholder="Correo">
                        </div>
                        <div class="cl-form-group">
                            <input type="password" id='claveUsuario' name='claveUsuario' title='Digite su clave'
                                style='cursor:pointer' class="cl-form-control cl-rounded-left" placeholder="Clave">
                        </div>
                        <div class="cl-form-group">
                            <button type="button" id='entrarBtn' name='entrarBtn' style='cursor:pointer'
                                title='Entrar al sistema'
                                class="cl-form-control cl-btn cl-btn-primary cl-rounded submit cl-px-3">Entrar</button>
                            <button type="button" id='activarBtn' name='activarBtn' style='cursor:pointer' title='Activar'
                                class="cl-form-control cl-btn cl-btn-primary cl-rounded submit cl-px-3">Activar</button>
                        </div>
                        <div class="cl-form-group cl-text-center">
                                <a href="#">¿Olvido su clave?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>

</body>

</html>