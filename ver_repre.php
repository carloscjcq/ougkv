<?php
//seguridad de sessiones paginacion

session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if ($varsesion== null || $varsesion='') {
    header("location: iniciarsesion.php");
    die();
}


 ?>
<?php 
require("conexionpdo.php");
require("conexion.php");
?>


<?php
$codigo = $_GET['idrepre'];
echo $codigo;
?>