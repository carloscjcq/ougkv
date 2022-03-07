<form action="pagom.php" method="POST">


<h5>Pago</h5>
  <!--insertar PAGO -->
    <?php 
    require("conexionpdo.php");
    $a = $conexion->prepare("SELECT * FROM pagos");
    $a->execute();
    ?>
      <select name="id_pago" id="id_pago" required class="form-select">
        <?php  
        foreach ($a as $r) {
          echo "<option value=".$r[0].">".$r[3]."</option>";}

        ?>
      </select>
  <!--insertar PAGO-->
<h5>Mes</h5>
    <!--insertar mes -->
    <?php 
    require("conexionpdo.php");
    $b = $conexion->prepare("SELECT * FROM meses");
    $b->execute();
    ?>
      <select name="mes" id="mes" required class="form-select">
        <?php  
        foreach ($b as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>
  <!--insertar mes-->
<h5>Atleta</h5>
    <!--insertar usuario -->
    <?php 
    require("conexionpdo.php");
    $c = $conexion->prepare("SELECT * FROM atletas");
    $c->execute();
    ?>
      <select name="id_atleta" id="id_atleta" required class="form-select">
        <?php  
        foreach ($c as $r) {
          echo "<option value=".$r[0].">".$r[0]."</option>";}

        ?>
      </select>
  <!--insertar usuario-->

  <input type="submit" name="registrar">
	
</form>