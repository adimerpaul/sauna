<?php 
include '../libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$nsauna=$_POST['nsauna'];
$cc=mysql_query("SELECT * FROM cliente WHERE ci='$ci'");
if(mysql_num_rows($cc)==0){
	mysql_query("INSERT INTO cliente VALUES('$ci','$nombre')");
}
if(mysql_num_rows($cc)==1){
	mysql_query("UPDATE cliente SET nombre='$nombre' WHERE ci='$ci'");
}
if($tipo=="SIMPLE"){
	$precio=10;
}elseif ($tipo=="DOBLE") {
	$precio=15;
}elseif ($tipo=="TRIPLE") {
	$precio=20;
}elseif ($tipo=="SAUNA MAYORES ESPACIAL") {
	$precio=5;
}
$fecha = date('Y-m-d');
$he=date("H").":".date("i").":".date("s");
$hs=date("H") + 1 .":".date("i").":".date("s");
mysql_query("INSERT INTO clientesauna VALUES('null','$ci','$nsauna','$tipo','$precio','$fecha','$he','$hs')");
header('Location: ../principal.php');
?>