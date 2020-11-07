<?php
include '../libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
//$ci=$_POST['ci'];
$total=$_POST['total'];
$nombre=strtoupper($_POST['nombre']);
$imac=$_POST['imac'];
$ima=$_POST['ima'];
$imec=$_POST['imec'];
$ime=$_POST['ime'];
$smac=$_POST['smac'];
$sma=$_POST['sma'];
$smec=$_POST['smec'];
$sme=$_POST['sme'];
$simac=$_POST['simac'];
$sima=$_POST['sima'];
$simec=$_POST['simec'];
$sime=$_POST['sime'];
$femac=$_POST['femac'];
$fema=$_POST['fema'];
$femec=$_POST['femec'];
$feme=$_POST['feme'];
$duc=$_POST['duc'];
$du=$_POST['du'];
$dec=$_POST['dec'];
$de=$_POST['de'];
$adc=$_POST['adc'];
$ad=$_POST['ad'];
$pmac=$_POST['pmac'];
$pma=$_POST['pma'];
$pmec=$_POST['pmec'];
$pme=$_POST['pme'];


/*
$cc=mysql_query("SELECT * FROM cliente WHERE ci='$ci'");
if(mysql_num_rows($cc)==0){
	mysql_query("INSERT INTO cliente VALUES('$ci','$nombre')");
}
if(mysql_num_rows($cc)==1){
	mysql_query("UPDATE cliente SET nombre='$nombre' WHERE ci='$ci'");
}
*/
$fecha = date('Y-m-d');
$he=date("H").":".date("i").":".date("s");
$hs=date("H") + 1 .":".date("i").":".date("s");
mysql_query("INSERT INTO clientesauna VALUES('null','$nombre','0','INGRESO','$total','$fecha','$he','$hs','NO MODIFICADO','0','".$_SESSION['ci']."')");
$cf=mysql_query("SELECT idclientesauna FROM clientesauna ORDER BY idclientesauna  DESC");
$ff=mysql_fetch_array($cf);
$id=$ff[0];
mysql_query("INSERT INTO detalle VALUES('null','INDIVIDUALES MAYORES','$imac','3','$ima','$id')");
mysql_query("INSERT INTO detalle VALUES('null','INDIVIDUALES MENORES','$imec','1.5','$ime','$id')");
mysql_query("INSERT INTO detalle VALUES('null','SAUNAS MAYORES','$smac','8','$sma','$id')");
mysql_query("INSERT INTO detalle VALUES('null','SAUNAS MENORES','$smec','4','$sme','$id')");
mysql_query("INSERT INTO detalle VALUES('null','SAUNAS INDIVIDUALES MAYORES','$simac','8','$sima','$id')");
mysql_query("INSERT INTO detalle VALUES('null','SAUNAS INDIVIDUALES MENORES','$simec','4','$sime','$id')");
mysql_query("INSERT INTO detalle VALUES('null','FOSAS ESPECIALES MAYORES','$femac','5','$fema','$id')");
mysql_query("INSERT INTO detalle VALUES('null','FOSAS ESPECIALES MENORES','$femec','2.5','$feme','$id')");
mysql_query("INSERT INTO detalle VALUES('null','DUCHAS','$duc','2','$du','$id')");
mysql_query("INSERT INTO detalle VALUES('null','DELEGACIONES','$dec','2','$de','$id')");
mysql_query("INSERT INTO detalle VALUES('null','ADULTO MAYOR','$adc','2','$ad','$id')");
mysql_query("INSERT INTO detalle VALUES('null','PISINA MAYOR','$pmac','3','$pma','$id')");
mysql_query("INSERT INTO detalle VALUES('null','PISINA MENOR','$pmec','1.5','$pme','$id')");
header('Location: ../boleta.php?nombre='.$nombre.'&idclientesauna='.$id);
?>