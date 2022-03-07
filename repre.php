<?php
 require("conexion.php");

if (isset($_POST['ci'])) {
    $ci = $_POST['ci'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ruta_foto = $_POST['ruta_foto'];
    $nacionalidad = $_POST['nacionalidad'];

    $validar = "SELECT * FROM representantes WHERE ci = '$ci' || email = '$email'";
    $validando = $conexion->query($validar);
    if ($validando->num_rows > 0) {
        echo "<script>alert('El representante no se pudo registrar debido a que ya esta registrado');window.location='/gkuv/admin.php';</script>";
    } else{

    $sql = "INSERT INTO representantes(ci, apellidos, nombres, direccion, telefono, email, ruta_foto, nacionalidad) VALUES('$ci', '$apellidos', '$nombres', '$direccion', '$telefono', '$email', '$ruta_foto', '$nacionalidad')";

    if ($conexion->query($sql) === true) {
        echo "<script>alert('Se registro el representante correctamennte');window.location='/gkuv/admiN.php';</script>";
    }else{
        die("error al insertar datos:" . $conexion->error);
        }
    }
}