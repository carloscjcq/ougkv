<table class="table table-striped table-hover table-bordered" border="1">
    <tr>
      <th class="table-info">EVENTO</th>
      <th class="table-info">ATLETA</th>
      <th class="table-info">KATA</th>
      <th class="table-info">KUMITE</th>
      <th class="table-info">COMENTARIO</th>
      <th class="table-info">INSERTAR</th>
    </tr>

    <?php
    $nulo = '0';
      $sql="SELECT * FROM `gkuv`.`participantes_eventos` ORDER BY `participantes_eventos`.`id_evento` ASC";
      $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
    ?>



    <tr class="table-warning">
      <td><?php echo $mostrar['id_evento']?></td>
      <td><?php echo $mostrar['id_atleta']?></td>
      <td><?php echo $mostrar['resultado_kata']?></td>
      <td><?php echo $mostrar['resultado_kumite']?></td>
      <td><?php echo $mostrar['descripcion']?></td>
      <td>
        <div>
          <button type="button" class="btn btn-danger"><a href="eliminar_resultado.php?id=<?php echo $mostrar['id']?>" class="link-delete link-light">ELIMINAR</a></button>
          <button type="button" class="btn btn-warning"><a href="editar_resultado.php?id=<?php echo $mostrar['id']?>" class="link-light">EDITAR</a></button>
        </div>
      </td>

    </tr>
    <?php
      }
    ?>
</table>