<?php 
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
$hoy = date('Y-m-d');
$fe1=$hoy;
$fe2=$hoy;
if ( !empty($_GET['f1']) && !empty($_GET['f2'])) {
		$fe1=$_GET['f1'];
		$fe2=$_GET['f2'];
	}
$cons=mysql_query("SELECT sum(precio) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2' AND tipo='SIMPLE'");
$fila=mysql_fetch_array($cons);
$simple=$fila[0];
$cons=mysql_query("SELECT sum(precio) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2' AND tipo='DOBLE'");
$fila=mysql_fetch_array($cons);
$doble=$fila[0];
$cons=mysql_query("SELECT sum(precio) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2' AND tipo='TRIPLE'");
$fila=mysql_fetch_array($cons);
$triple=$fila[0];
$cons=mysql_query("SELECT sum(precio) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2' AND tipo='FAMILIAR'");
$fila=mysql_fetch_array($cons);
$familiar=$fila[0];
if($simple=="")$simple=0;
if($doble=="")$doble=0;
if($triple=="")$triple=0;
if($familiar=="")$familiar=0;
$cons=mysql_query("SELECT sum(precio) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2'");
$fila=mysql_fetch_array($cons);
$total=$fila[0];
?>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<ol class="breadcrumb">
  <li class="active">Reportes</li>
</ol>
<div class="panel panel-default">
<div class="row">
	<div class="col-xs-12">
	<form class="form-inline">
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

<div class="row">
	<div class="col-xs-12">
		<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
	</div>
	<div class="col-xs-12">
	   <button type="button" class="btn btn-default btn-lg btn-block">TOTAL GANADO <?php echo $total ?></button>
	</div>
</div>
</div>
<?php
include 'inc/pie.php';
?>

<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Ventas relizadas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Simple',
                y:  <?php echo $simple ?>
            }, {
                name: 'Doble',
                y: <?php echo $doble ?>
            }, {
                name: 'Triple',
                y: <?php echo $triple ?>
            }, {
                name: 'Familiar',
                y: <?php echo $familiar ?>
            }]
        }]
    });
});
</script>
