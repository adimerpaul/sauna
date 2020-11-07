<?php 
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
?>
<ol class="breadcrumb">
  <li class="active">Vista</li>
</ol>
<div class="panel panel-default">
  <table id="example" class="table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Modificado</th>
                <th>Hora modificado/ ci</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Idclientesauna</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Modificado</th>
                <th>Hora modificado/ ci</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
            $fecha = date('Y-m-d');
            $s=0;
            $c=mysql_query("SELECT idclientesauna,nombre,fecha,modificado,horamodificado,ci FROM clientesauna WHERE fecha='$fecha' AND modificado='MODIFICADO' ORDER BY idclientesauna DESC");
            while ($f=mysql_fetch_array($c)) {
              $s++;
              echo "<tr>
                      <td>$f[0]</td>
                      <td>$f[1]</td>
                      <td>$f[2]</td>
                      <td>$f[3]</td>
                      <td>$f[4]/ $f[5] ".ver('nombre','personal','ci',$f['ci'])."</td>
                  </tr>";

            }
            ?>
        </tbody>
    </table>
    <h3>Total Modificados <span class="label label-default"> <?php echo $s; ?></span></h3>
</div>
<?php
include 'inc/pie.php';
?>