<?php  
 require("conexion.php");

    $id = $_POST['id'];
    $id_tipo = $_POST['id_tipo'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_f = $_POST['fecha_f'];
    $descripcion = $_POST['descripcion'];

$actualizar = "UPDATE eventos SET  id_tipo='$id_tipo',  fecha_i='$fecha_i', fecha_f='$fecha_f', descripcion='$descripcion' WHERE id='$id'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se ha actualizado los cambios correctamente, actualice la pagina para ver los cambios');window.location='/gkuv/administracion.php';</script>";
}else{
    echo "<script>alert('no se ha actualizado los cambios correctamente');window.location='/administracion.php';</script>";
}


?>