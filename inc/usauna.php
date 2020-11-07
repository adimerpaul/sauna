<?php 
include '../libreria.php';
$con=conexion();
date_default_timezone_set('UTC');
$hora=date("H") - 4 .":".date("i").":".date("s");
$nsaunac=$_POST['nsaunac'];
$c=mysql_query("SELECT idclientesauna FROM clientesauna WHERE nsauna='$nsaunac' ORDER BY idclientesauna DESC");
$f=mysql_fetch_array($c);
$idclientesauna=$f[0];
echo $idclientesauna;
mysql_query("UPDATE clientesauna SET horafinal='$hora' WHERE idclientesauna='$idclientesauna'");
header('Location: ../principal.php');
?>