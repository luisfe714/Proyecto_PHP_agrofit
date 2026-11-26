<?php
	$conexion = new mysqli("localhost", "root", "", "modelo_adso_753");
	$conexion->set_charset("utf8");
	if ($conexion->connect_error) {
		die("Error de conexión: " . $conexion->connect_error);
	} else {	}
?>