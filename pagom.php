<?php
 require("conexion.php");

if (isset($_POST['id_pago'])) {
    $id_pago = $_POST['id_pago'];
    $mes = $_POST['mes'];
    $id_atleta = $_POST['id_atleta'];

    $validar = "SELECT * FROM mensualidades WHERE id_pago = '$id_pago'";
    $validando = $conexion->query($validar);
    if ($validando->num_rows > 0) {
        echo "Este pago ya fue realizado o el mismo fue utilizado para otro pago";
        require("pagos.php");
    } else{

    $sql = "INSERT INTO mensualidades(id_pago,mes,id_atleta,id) VALUES('$id_pago', '$mes', '$id_atleta',NULL)";

    if ($conexion->query($sql) === true) {
        echo "<script>alert('PAGO DEL MES $mes del atleta $id_atleta fue realizado satisfactoriamente');window.location='/gkuv/pagos.php';</script>";
        }
    }
    echo "<script>alert('Hubo un error al realizar el pago intentelo nuevamente ');window.location='/gkuv/pagos.php';</script>";
    
}
?>