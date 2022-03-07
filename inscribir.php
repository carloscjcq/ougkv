<?php
 require("conexion.php");

if (isset($_POST['id_evento'])) {
    $id_evento = $_POST['id_evento'];
    $id_atleta = $_POST['id_atleta'];
    $resultado_kata = $_POST['resultado_kata'];
    $resultado_kumite = $_POST['resultado_kumite'];
    $descripcion = $_POST['descripcion'];



    $sql = "INSERT INTO participantes_eventos(id, id_evento, id_atleta, resultado_kata, resultado_kumite, descripcion) VALUES(NULL, '$id_evento', '$id_atleta', '$resultado_kata', '$resultado_kumite', '$descripcion')";

    if ($conexion->query($sql) === true) {
        echo "<script>alert('Atleta inscrito satisfactoriamente');window.location='/gkuv/planificacion.php';</script>";
    }else{
        echo "<script>alert('Hubo un problema al incribir');window.location='/gkuv/planificacion.php';</script>";
        }
}


?>