<?php

	$servidor = "localhost";
	$nombreusuario = "root";
	$password = "";
	$db = "gkuv";

	$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

	if ($conexion-> connect_error) {
		die("conexion fallida: " . $conexion-> connect_error);
	}
?>