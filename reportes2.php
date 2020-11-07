<?php 
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
$hoy = date('Y-m-d');
$fe1=$hoy;
$fe2=$hoy;
?>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<ol class="breadcrumb">
  <li class="active">Reportes</li>
</ol>
<div class="panel panel-default">
<div class="row">
	<div class="col-xs-12">
	<form  action="semanal.php" method="POST">
	  <div class="form-group">
	    <label for="exampleInputName2">Fecha Inicio</label>
	    <input type="date" class="form-control" name="f1" value="<?php echo $fe1?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail2">Fecha Final</label>
	    <input type="date" class="form-control" name="f2" value="<?php echo $fe2?>">
	  </div>
	  <button type="submit" class="btn btn-success">Consulta</button>
	</form>
	</div>
</div>
</div>
<?php
include 'inc/pie.php';
?>

