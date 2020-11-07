<?php 
include '../libreria.php';
$con=conexion();
$ci=$_GET['ci'];
mysql_query("DELETE FROM personal WHERE ci='$ci'");
header("Location: ../usuario.php");
?>