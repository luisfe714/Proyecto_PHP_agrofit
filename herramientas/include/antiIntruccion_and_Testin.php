<?php
/*
 * seguridad.php — protección común para TODAS las páginas internas.
 *
 * Uso: debe ser la PRIMERA línea de cada página protegida, antes de
 * cualquier HTML o espacio en blanco:
 *
 *     <?php require_once '../include/antiIntruccion_and_Testin.php'; ?>
 *
 * Qué hace:
 *   - Bloquea la entrada a quien no haya iniciado sesión.
 *   - Cierra la sesión tras un tiempo de inactividad.
 *   - Envía cabeceras de seguridad al navegador.
 *   - Ofrece la función e() para imprimir datos sin riesgo de XSS.
 */

// Este archivo no se puede abrir directamente desde el navegador
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'])) {
    http_response_code(403);
    exit;
}

const TIEMPO_INACTIVIDAD = 1800;              // segundos (30 minutos)
const RUTA_LOGIN         = '../../index.php'; // relativa a la página protegida

// ---------- Cabeceras de seguridad ----------
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');   // el navegador no "adivina" tipos de archivo
header('X-Frame-Options: DENY');             // la página no se puede incrustar en otro sitio
header('Referrer-Policy: same-origin');
// Sin caché: tras salir, el botón "Atrás" no vuelve a mostrar la página
header('Cache-Control: no-store, no-cache, must-revalidate');

// Política de contenido: solo se ejecutan scripts propios y de los CDN usados.
// Bloquea scripts inyectados y JavaScript escrito dentro del HTML (onclick="", etc.).
// Si agregas otro CDN, añádelo aquí. Si algo deja de funcionar, la consola del
// navegador (F12) indica qué regla lo bloqueó.
header(
    "Content-Security-Policy: "
    . "default-src 'self'; "
    . "script-src 'self' https://cdn.jsdelivr.net https://ajax.googleapis.com; "
    . "style-src 'self' https://cdn.jsdelivr.net; "
    . "font-src 'self' https://cdn.jsdelivr.net; "
    . "img-src 'self' data:; "
    . "connect-src 'self'; "
    . "form-action 'self'; "
    . "base-uri 'self'; "
    . "frame-ancestors 'none'"
);

// ---------- Sesión (misma configuración que el login) ----------
$esHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
ini_set('session.use_strict_mode', '1');
ini_set('session.use_only_cookies', '1');
session_set_cookie_params([
    'lifetime' => 0,
    'path'     => '/',
    'secure'   => $esHttps,
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();

function irAlLogin(): void
{
    header('Location: ' . RUTA_LOGIN);
    exit;
}

// 1) Sin sesión iniciada no se entra
if (empty($_SESSION['idUsuarioSesion'])) {
    irAlLogin();
}

// 2) Sesión vencida por inactividad
if (isset($_SESSION['ultimaActividad'])
    && (time() - $_SESSION['ultimaActividad']) > TIEMPO_INACTIVIDAD) {
    $_SESSION = [];
    session_destroy();
    irAlLogin();
}
$_SESSION['ultimaActividad'] = time();

/** Imprime texto de forma segura (evita inyección de HTML/JavaScript). */
function e($texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

/**
 * Opcional: limitar una página a ciertos roles.
 * Ejemplo, justo después del require:  exigirRol([1]);   // solo idRol 1
 */
function exigirRol(array $rolesPermitidos): void
{
    if (!in_array((int) ($_SESSION['idrolSesion'] ?? 0), $rolesPermitidos, true)) {
        http_response_code(403);
        exit('Acceso no autorizado.');
    }
}