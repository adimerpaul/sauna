<?php
session_start();
function conexion(){
	$con=mysql_connect("localhost","root","");
	mysql_select_db("sauna");
	if($_SESSION['nombrei']==''){
		header('Location: index.php');
	}
	return $con;
}
function conexions(){
	$con=mysql_connect("localhost","root","");
	mysql_select_db("sauna");
	return $con;
}
function ver($mostrar,$tabla,$where,$dato){
	$c=mysql_query("SELECT $mostrar FROM $tabla WHERE $where='$dato'");
	$f=mysql_fetch_array($c);
	return $f[$mostrar];
}
?>