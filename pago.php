<form action="newpago.php" method="POST">
<div class="d-flex container">
	<?php 
    require("conexionpdo.php");
    $a = $conexion->prepare("SELECT * FROM tipo_de_pago");
    $a->execute();
    ?>
      <select name="tipo" id="tipo" required class="form-select">
        <?php  
        foreach ($a as $r) {
          echo "<option value=".$r[0].">".$r[1]."</option>";}

        ?>
      </select>

      <input type="date" name="fecha" id="fecha" required>
</div>
<div class="container mt-1 mb-1">
      <textarea class="form-control" type="text" name="descripcion" id="descripcion" required autocomplete="off" placeholder="Formato: CODIGO-> Descripcion"></textarea>	
</div>
<div class="container">
	<?php 
    require("conexionpdo.php");
    $b = $conexion->prepare("SELECT * FROM atletas");
    $b->execute();
    ?>
      <select name="id_atleta" id="id_atleta" required class="form-select">
        <?php  
        foreach ($b as $r) {
          echo "<option value=".$r[0].">".$r[0]."</option>";}

        ?>
      </select>	
</div>
<div class="container"><input type="submit" name="registrar"></div>
	
</form>