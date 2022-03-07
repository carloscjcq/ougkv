<?php
 require("conexion.php");

if (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $id_atleta = $_POST['id_atleta'];

    $sql = "INSERT INTO pagos(id,tipo,fecha,descripcion,id_atleta) VALUES(NULL,'$tipo','$fecha','$descripcion','$id_atleta')";

    if ($conexion->query($sql) === true) {
        echo "<script>alert('El pago de TIPO $tipo DEL ATLETA $id_atleta fue realizado satisfactoriamente');window.location='/gkuv/pagos.php';</script>";
    }else{
        echo "<script>alert('Hubo un error al realizar el pago intentelo nuevamente ');window.location='/gkuv/pagos.php';</script>";
        }
    }

?>