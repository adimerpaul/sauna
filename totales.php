<?php 
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
?>
<link rel="stylesheet" type="text/css" href="css/jquery-editable-select.min.css">
<script type="text/javascript" src="js/jquery-editable-select.min.js"></script>
<ol class="breadcrumb">
  <li class="active">Totales </li>
</ol>
<div class="panel panel-default">
  <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ci</th>
                <th>Total</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Ci</th>
                <th>Total</th>
            </tr>
        </tfoot>
        <tbody>
            <?php 
            $fecha = date('Y-m-d');
            $c=mysql_query("SELECT * FROM clientesauna ORDER BY ci DESC");
            while ($f=mysql_fetch_array($c)) {
              echo "<tr>
                      <td>$f[0]</td>
                      <td>$f[1]</td>
                      <td>$f[5]</td>
                      <td>".$f['ci']."/".ver('nombre','personal','ci',$f['ci'])."</td>
                      <td>$f[4]</td>
                  </tr>";

            }
            ?>
            
        </tbody>
    </table>
</div>
<?php
include 'inc/pie.php';
?>
<script type="text/javascript" src="js/totales.js"></script>
<!-- Insertar -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="POST" action="inc/cpersonal.php">
        <div class="form-group">
          <label for="ci" class="col-sm-2 control-label">CI</label>
          <div class="col-sm-10">
            <input name="ci" type="text" class="form-control" id="ci" placeholder="CI" required>
          </div>
        </div>
        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">nombre</label>
          <div class="col-sm-10">
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre" required>
          </div>
        </div>
        <div class="form-group">
          <label for="nombrei" class="col-sm-2 control-label">nombrei</label>
          <div class="col-sm-10">
            <input name="nombrei" type="text" class="form-control" id="nombrei" placeholder="nombrei" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clavei" class="col-sm-2 control-label">clavei</label>
          <div class="col-sm-10">
            <input name="clavei" type="password" class="form-control" id="clavei" placeholder="clavei" required>
          </div>
        </div>
        <div class="form-group">
          <label for="tipo" class="col-sm-2 control-label">tipo</label>
          <div class="col-sm-10">
            <select name="tipo" class="form-control" id="tipo" required>
              <option value="V">VENDEDOR</option>
              <option value="A">ADMINISTRADOR</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="estado" class="col-sm-2 control-label">estado</label>
          <div class="col-sm-10">
            <select name="estado" class="form-control" id="estado" required>
              <option value="ACTIVO">ACTIVO</option>
              <option value="INACTIVO">INACTIVO</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success">Insertar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Modificar -->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="POST" action="inc/upersonal.php">
        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">nombre</label>
          <div class="col-sm-10">
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre" required>
            <input name="ci" id="ci" required hidden>
          </div>
        </div>
        <div class="form-group">
          <label for="nombrei" class="col-sm-2 control-label">nombrei</label>
          <div class="col-sm-10">
            <input name="nombrei" type="text" class="form-control" id="nombrei" placeholder="nombrei" required>
          </div>
        </div>
        <div class="form-group">
          <label for="clavei" class="col-sm-2 control-label">clavei</label>
          <div class="col-sm-10">
            <input name="clavei" type="password" class="form-control" id="clavei" placeholder="clavei" required>
          </div>
        </div>
        <div class="form-group">
          <label for="tipo" class="col-sm-2 control-label">tipo</label>
          <div class="col-sm-10">
            <select name="tipo" class="form-control" id="tipo" required>
              <option value="V">VENDEDOR</option>
              <option value="A">ADMINISTRADOR</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="estado" class="col-sm-2 control-label">estado</label>
          <div class="col-sm-10">
            <select name="estado" class="form-control" id="estado" required>
              <option value="ACTIVO">ACTIVO</option>
              <option value="INACTIVO">INACTIVO</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-warning">Modificar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>