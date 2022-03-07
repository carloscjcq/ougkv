<?php  
require("conexion.php");
?>

<table class="table table-striped table-hover table-bordered" border="1">
    <tr>
      <th class="table-info">CODIGO</th>
      <th class="table-info">NOMBRES</th>
      <th class="table-info">APELLIDOS</th>
      <th class="table-info">EDAD</th>
      <th class="table-info">CEDULA</th>
      <th class="table-info">KYU</th>
      <th class="table-info">SEXO</th>
      <th class="table-info">REPRESENTANTE</th>

    </tr>
    <?php
      $sql="SELECT * FROM atletas ORDER BY 'codigo'";
      $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
    ?>



    <tr class="table-warning">
      <td><?php echo $mostrar['codigo']?></td>
      <td><?php echo $mostrar['nombres']?></td>
      <td><?php echo $mostrar['apellidos']?></td>
      <td><?php echo $mostrar['fechanacimiento']?></td>
      <td><?php echo $mostrar['ci']?></td>
      <td><?php echo $mostrar['kyu']?></td>
      <td><?php echo $mostrar['sexo']?></td>
      <td><?php echo $mostrar['idrepre']?></td>
    </tr>
    <?php
      }
    ?>
</table>