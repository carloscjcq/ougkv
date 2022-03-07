<div class="d-flex container">
  <div class="container">
    <h1>PAGOS</h1>
<table class="table table-striped table-hover table-bordered" border="1">
    <tr>
      <th class="table-info">ID</th>
      <th class="table-info">DESCRIPCION</th>
      <th class="table-info">FECHA</th>
      <th class="table-info">ATLETA</th>
      <th class="table-info">TIPO</th>
      <!--<th class="table-info">ACCION</th>-->

    </tr>
    <?php
    $nulo = '0';
      $sql="SELECT * FROM `gkuv`.`pagos` WHERE `id` > '$nulo' ORDER BY `id` ASC";
      $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
    ?>



    <tr class="table-warning">
      <td><?php echo $mostrar['id']?></td>
      <td><?php echo $mostrar['descripcion']?></td>
      <td><?php echo $mostrar['fecha']?></td>
      <td><?php echo $mostrar['id_atleta']?></td>
      <td><?php echo $mostrar['tipo']?></td>
      <!--<td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" class="btn btn-danger">BORRAR</button>
          <button type="button" class="btn btn-warning">EDITAR</button>
          <button type="button" class="btn btn-success">MOSTRAR</button>
        </div>
      </td>-->
    </tr>
    <?php
      }
    ?>
</table>
  </div>

  <div class="container">
    <h1>MENSUALIDADES</h1>
<table class="table table-striped table-hover table-bordered" border="1">
    <tr>
      <th class="table-info">ATLETA</th>
      <th class="table-info">MES</th>
      <th class="table-info">PAGO</th>
      <!--<th class="table-info">ACCION</th>-->
    </tr>
    <?php
    $nulo = '0';
      $sql="SELECT * FROM `gkuv`.`mensualidades` WHERE `id_pago` > '$nulo' ORDER BY `mensualidades`.`id_atleta` ASC";
      $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
    ?>



    <tr class="table-warning">
      <td><?php echo $mostrar['id_atleta']?></td>
      <td><?php echo $mostrar['mes']?></td>
      <td><?php echo $mostrar['id_pago']?></td>
      <!--<td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <button type="button" class="btn btn-danger">BORRAR</button>
          <button type="button" class="btn btn-warning">EDITAR</button>
          <button type="button" class="btn btn-success">MOSTRAR</button>
        </div>
      </td>-->
    </tr>
    <?php
      }
    ?>
</table>    
  </div>

</div>
