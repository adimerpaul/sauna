<?php 
include 'inc/cabeza.php';
date_default_timezone_set('America/La_Paz');
$hoy = date('Y-m-d');
$fe1=$_POST['f1'];
$fe2=$_POST['f2'];
$hora=date("H").":".date("i").":".date("s");
?>
<center><b>COOPERATIVA MINERA POOPO Ldta.</b></center>
<div class="row">
	<div class="col-xs-2">
		<img src="images/logo.jpg" width="100">
	</div>
	<div class="col-xs-7">
		<center>
			<br>
			Poopó-Oruro-Bolivia<br><br><br>
			<?php echo "De Fecha $fe1 hasta $fe2" ?>
			 <button onclick="imprimir()" type="button" class="btn btn-default btn-xs">
			 	<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
			 </button>
		</center>
	</div>
	<div class="col-xs-3">
		<center>
			Fecha: <?php echo $hoy; ?><br>
			Hora: <?php echo $hora; ?>
		</center>
	</div>
</div>
<div style="text-align: right;">
	<h4>Ingreso total del reporte Bs.
	<?php 
		$c=mysql_query("SELECT SUM(total) FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2'");
		$f=mysql_fetch_array($c);
		echo $f[0];
	?>		
	</h4>
</div>
<div class="row">
	<b>
	<div class="col-xs-1">
		id
	</div>
	<div class="col-xs-2">
		Fecha
	</div>
	<div class="col-xs-8">
		Nombre del cliente
	</div>
	<div class="col-xs-1">
		Total
	</div>
	</b>
</div>
<?php 
	$c=mysql_query("SELECT idclientesauna,fecha,nombre,total FROM clientesauna WHERE fecha>='$fe1' AND fecha<='$fe2' ORDER BY idclientesauna DESC");
	while ($f=mysql_fetch_array($c)) {
		echo "<div class='row'>
			<div class='col-xs-1'>
				$f[0]
			</div>
			<div class='col-xs-2'>
				$f[1]
			</div>
			<div class='col-xs-8'>
				$f[2]
			</div>
			<div class='col-xs-1'>
				$f[3]
			</div>
		</div>";
	}
?>	
<script type="text/javascript">
    function imprimir() {
        if (window.print) {
            window.print();
        } else {
            alert("La función de impresion no esta soportada por su navegador.");
        }
    }
    //imprimir();
</script>
<!-- <meta http-equiv="Refresh" content="0;reportes2.php">-->
