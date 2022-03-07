<?php  
 require("conexion.php");

$codigo = $_GET['id'];

$eliminar = "DELETE FROM atletas WHERE codigo = '$codigo'";

$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
    echo "<script>alert('Se ha borrado el atleta satisfactoriamente');window.location='/gkuv/administracion.php';</script>";
}else{
    echo "<script>alert('No se ha podido borrar el atleta');window.location='/administracion.php';</script>";
}

?>