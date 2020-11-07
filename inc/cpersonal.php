<?php
include '../libreria.php';
$con=conexion();
date_default_timezone_set('America/La_Paz');
$ci=strtoupper($_POST['ci']);
$nombre=strtoupper($_POST['nombre']);
$nombrei=strtoupper($_POST['nombrei']);
$clavei=strtoupper($_POST['clavei']);
$tipo=strtoupper($_POST['tipo']);
$estado=strtoupper($_POST['estado']);
mysql_query("INSERT INTO personal VALUES('$ci','$nombre','$nombrei','$clavei','$tipo','$estado')");
header("Location: ../usuario.php");