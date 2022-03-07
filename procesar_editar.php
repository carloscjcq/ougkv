<?php  
 require("conexion.php");


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

$actualizar = "UPDATE atletas SET codigo='$codigo',  apellidos='$apellidos', nombres='$nombres', nacionalidad='$nacionalidad', ci='$ci', sexo='$sexo', fechanacimiento='$fechanacimiento', telefono='$telefono', direccion='$direccion', kyu='$kyu', ruta_foto='$ruta_foto', idrepre='$idrepre', parentezco='$parentezco' WHERE codigo='$codigo'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se ha actualizado los cambios correctamente, actualice la pagina para ver los cambios');window.location='/gkuv/administracion.php';</script>";
}else{
    echo "<script>alert('no se ha actualizado los cambios correctamente');window.location='/administracion.php';</script>";
}
?>