<?php

$conexion=mysqli_connect("localhost","root","");

if ($conexion->connect_error) {
	die("conexion fallida" . $conexion->connect_error);
}

?>