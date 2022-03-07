<?php
 require("conexion.php");

if (isset($_POST['id_tipo'])) {
    $id_tipo = $_POST['id_tipo'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_f = $_POST['fecha_f'];
    $descripcion = $_POST['descripcion'];


    $sql = "INSERT INTO eventos(id,id_tipo,fecha_i,fecha_f,descripcion) VALUES(NULL,'$id_tipo','$fecha_i','$fecha_f','$descripcion')";

    if ($conexion->query($sql) === true) {
        echo "<script>alert('Evento registrado satisfactoriamente');window.location='/gkuv/planificacion.php';</script>";
    }else{
        echo "<script>alert('No se pudo ingresar el evento');window.location='/gkuv/planificacion.php';</script>";
    }
}
?>