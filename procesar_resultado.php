<?php  
 require("conexion.php");

    $id = $_POST['id'];
    $id_evento = $_POST['id_evento'];
    $id_atleta = $_POST['id_atleta'];
    $resultado_kata = $_POST['resultado_kata'];
    $resultado_kumite = $_POST['resultado_kumite'];
    $descripcion = $_POST['descripcion'];

$actualizar = "UPDATE participantes_eventos SET  id_evento='$id_evento',  id_atleta='$id_atleta', resultado_kata='$resultado_kata', resultado_kumite='$resultado_kumite',descripcion='$descripcion' WHERE id='$id'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se ha actualizado los cambios correctamente, actualice la pagina para ver los cambios');window.location='/gkuv/administracion.php';</script>";
}else{
    echo "<script>alert('no se ha actualizado los cambios correctamente');window.location='/administracion.php';</script>";
}


?>