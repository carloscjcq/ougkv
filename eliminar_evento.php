<?php  
 require("conexion.php");

$id = $_GET['id'];

$eliminar = "DELETE FROM eventos WHERE id = '$id'";

$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
    echo "<script>alert('Se ha borrado el evento satisfactoriamente');window.location='/gkuv/administracion.php';</script>";
}else{
    echo "<script>alert('No se ha podido borrar el atleta');window.location='/administracion.php';</script>";
}

?>