<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","gkuv");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
error_reporting(0);
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['cargo']==1){ //administrador 
    header("location:admin.php");

}else
if($filas['cargo']==2){ //atleta
header("location:atleta.php");
}
else{
    ?>
    <?php
    include("iniciarsesion.php");
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert justify-content-center align-items-center">
          <strong>Oops hubo un problema!</strong> 
          Parece que has cometido un error al loguearte, intentalo nuevamente
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>