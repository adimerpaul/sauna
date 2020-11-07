<?php
include '../libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
$hora=date("H").":".date("i").":".date("s");
//$ci=$_POST['ci'];
$total=$_POST['total'];
$idclientesauna=$_POST['idclientesauna'];
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

$c=mysql_query("SELECT * FROM detalle WHERE tipo='INDIVIDUALES MAYORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$imac',total='$ima' WHERE tipo='INDIVIDUALES MAYORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='INDIVIDUALES MENORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$imec',total='$ime' WHERE tipo='INDIVIDUALES MENORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='SAUNAS MAYORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$smac',total='$sma' WHERE tipo='SAUNAS MAYORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='SAUNAS MENORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$smec',total='$sme' WHERE tipo='SAUNAS MENORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='SAUNAS INDIVIDUALES MAYORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$simac',total='$sima' WHERE tipo='SAUNAS INDIVIDUALES MAYORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='SAUNAS INDIVIDUALES MENORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$simec',total='$sime' WHERE tipo='SAUNAS INDIVIDUALES MENORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='FOSAS ESPECIALES MAYORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$femac',total='$fema' WHERE tipo='FOSAS ESPECIALES MAYORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='FOSAS ESPECIALES MENORES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$femec',total='$feme' WHERE tipo='FOSAS ESPECIALES MENORES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='DUCHAS' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$duc',total='$du' WHERE tipo='DUCHAS' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='DELEGACIONES' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$dec',total='$de' WHERE tipo='DELEGACIONES' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='ADULTO MAYOR' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$adc',total='$ad' WHERE tipo='ADULTO MAYOR' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='PISINA MAYOR' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$pmac',total='$pma' WHERE tipo='PISINA MAYOR' AND idclientesauna='$idclientesauna'");
}
$c=mysql_query("SELECT * FROM detalle WHERE tipo='PISINA MENOR' AND idclientesauna='$idclientesauna'");
if (mysql_num_rows($c)>0) {
	mysql_query("UPDATE detalle SET cantidad='$pmec',total='$pme' WHERE tipo='PISINA MAYOR' AND idclientesauna='$idclientesauna'");
}
mysql_query("UPDATE clientesauna SET total='$total',modificado='MODIFICADO',horamodificado='$hora' WHERE idclientesauna='$idclientesauna'");
header('Location: ../ventas.php');
?>