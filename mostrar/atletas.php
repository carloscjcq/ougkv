<div class="container-fluid">
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
      <th class="table-info">DESEO</th>

    </tr>
    <?php
    $nulo = '0';
      $sql="SELECT * FROM `gkuv`.`atletas` WHERE `codigo` > '$nulo' ORDER BY 'codigo'";
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
      <td>
      

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">

          <button type="button" class="btn btn-danger"><a href="eliminar.php?id=<?php echo $mostrar['codigo']?>" class="link-delete link-light">ELIMINAR</a></button>

          <button type="button" class="btn btn-warning"><a href="editar.php?id=<?php echo $mostrar['codigo']?>" class="link-light">EDITAR</a></button>

          <button type="button" class="btn btn-success"><a href="ver.php?id=<?php echo $mostrar['codigo']?>" class="link-light">MOSTRAR</a></button>

        </div>

      </td>
    </tr>
    <?php
      }
    ?>

</table>
</div>
<script src="confirmacion.js"></script>