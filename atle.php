<?php
 require("conexion.php");

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $nacionalidad = $_POST['nacionalidad'];
    $ci = $_POST['ci'];
    $sexo = $_POST['sexo'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $kyu = $_POST['kyu'];
    $ruta_foto = $_POST['ruta_foto'];
    $idrepre = $_POST['idrepre'];
    $parentezco = $_POST['parentezco'];

    $validar = "SELECT * FROM atletas WHERE codigo = '$codigo'";
    $validando = $conexion->query($validar);
    if ($validando->num_rows > 0) {
        echo "El codigo y/o la cedula de identidad del atleta ya esta en uso";
        require("admin.php");
    } else{

    $sql = "INSERT INTO atletas(codigo, apellidos, nombres, nacionalidad, ci, sexo, fechanacimiento, telefono, direccion, kyu, ruta_foto, idrepre, parentezco) VALUES('$codigo', '$apellidos', '$nombres', '$nacionalidad', '$ci', '$sexo', '$fechanacimiento', '$telefono', '$direccion', '$kyu', '$ruta_foto', '$idrepre', '$parentezco')";

    if ($conexion->query($sql) === true) {
echo "<script>alert('Se registro el atleta correctamennte');window.location='/gkuv/admin.php';</script>";
    }else{
        echo "<script>alert('Error al registrar atleta');window.location='/gkuv/admin.php';</script>";
        }
    }
}
?>