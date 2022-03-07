<div class="container-fluid">
  <table class="table table-striped table-hover table-bordered" border="1">
    <tr>
      <th class="table-info">EVENTO</th>
      <th class="table-info">INICIA</th>
      <th class="table-info">FINALIZA</th>
      <th class="table-info">DESEO</th>

    </tr>
    <?php
    $nulo = '0';
      $sql="SELECT * FROM `gkuv`.`eventos` WHERE `id` > '$nulo' ORDER BY `eventos`.`fecha_i` ASC";
      $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
    ?>



    <tr class="table-warning">
      <td><?php echo $mostrar['descripcion']?></td>
      <td><?php echo $mostrar['fecha_i']?></td>
      <td><?php echo $mostrar['fecha_f']?></td>
      <td>
      

        <div>

          <button type="button" class="btn btn-danger"><a href="eliminar_evento.php?id=<?php echo $mostrar['id']?>" class="link-delete link-light">ELIMINAR</a></button>

          <button type="button" class="btn btn-warning"><a href="editar_evento.php?id=<?php echo $mostrar['id']?>" class="link-light">EDITAR</a></button>

        </div>

      </td>
    </tr>
    <?php
      }
    ?>
</table>
<script src="confirmacion.js"></script>
  
</div>
