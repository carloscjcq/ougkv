<?php
 require("conexion.php");

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $cargo = $_POST['cargo'];

    $validar = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $validando = $conexion->query($validar);
    if ($validando->num_rows > 0) {
        echo "<script>alert('El usuario no se pudo inscribir debido a que ya esta inscrito');window.location='/gkuv/admin.php';</script>";
    } else{

    $sql = "INSERT INTO usuarios(usuario,contraseña,cargo) VALUES('$usuario', '$contraseña', '$cargo')";

    if ($conexion->query($sql) === true) {
     echo "<script>alert('Se registro el usuario correctamennte');window.location='/gkuv/admin.php';</script>";
    }else{
        echo "<script>alert('El usuario no se pudo inscribir');window.location='/gkuv/admin.php';</script>";
        }
    }
}
?>