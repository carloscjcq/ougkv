<form action="inscribir.php" method="POST">
	<div class="d-flex">
	<!--insertar Evento -->
	<?php 
	require("conexionpdo.php");
	$e = $conexion->prepare("SELECT * FROM eventos");
	$e->execute();
	?>
	<select name="id_evento" id="id_evento" class="form-select">
	<?php  
	foreach ($e as $r) {
	echo "<option value=".$r[0].">".$r[4]."</option>";}

	?>
	</select>
	<!--insertar Evento-->

	<!--insertar Atleta -->
	<?php 
	require("conexionpdo.php");
	$a = $conexion->prepare("SELECT * FROM atletas");
	$a->execute();
	?>
	<select name="id_atleta" id="id_atleta" class="form-select">
	<?php  
	foreach ($a as $r) {
	echo "<option value=".$r[0].">".$r[0]."</option>";}

	?>
	</select>
	<!--insertar Atleta-->
		
	</div>

	<div class="d-flex">
	<select name="resultado_kata" id="resultado_kata" class="form-select">
	  <option value="0">PARTICIPO</option>
	  <option value="1">🥇</option>
	  <option value="2">🥈</option>
	  <option value="3">🥉</option>
	</select>

	<select name="resultado_kumite" id="resultado_kumite" class="form-select">
	  <option value="0">PARTICIPO</option>
	  <option value="1">🥇</option>
	  <option value="2">🥈</option>
	  <option value="3">🥉</option>
	</select>

	<input type="textarea" name="descripcion" autocomplete="off" id="descripcion" placeholder="COMENTARIO DEL COACH">
	<br>
	</div>

<input type="submit" name="registrar">



</form>