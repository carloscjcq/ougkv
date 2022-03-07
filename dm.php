<?php
 require("conexion.php");

if (isset($_POST['atleta'])) {
    $atleta = $_POST['atleta'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $gruposanguineo = $_POST['gruposanguineo'];
    $hernia = $_POST['hernia'];
    $alergia = $_POST['alergia'];
    $discapacidad = $_POST['discapacidad'];

    $validar = "SELECT * FROM datosmedicos WHERE atleta = '$atleta'";
    $validando = $conexion->query($validar);
    if ($validando->num_rows > 0) {
        echo "El atleta ya posee datos medicos dentro de la data";
        require("admin.php");
    } else{

    $sql = "INSERT INTO datosmedicos(atleta,altura,peso,gruposanguineo,hernia,alergia,discapacidad) VALUES('$atleta', '$altura', '$peso', '$gruposanguineo', '$hernia', '$alergia', '$discapacidad')";

    if ($conexion->query($sql) === true) {
        echo "datos medicos registrados";
        require("admin.php");
    }else{
        die("error al insertar datos:" . $conexion->error);
        }
    }
}
?>