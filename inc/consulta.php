<?php 
include '../libreria.php';
$con=conexion();
$select=$_POST['select'];
$tabla=$_POST['tabla'];
$where=$_POST['where'];
$dato=$_POST['dato'];
$orden=$_POST['orden'];
$c=mysql_query("SELECT $select FROM $tabla WHERE $where='$dato' ORDER BY $orden");
$f=mysql_fetch_array($c);
echo $f[0];
?>