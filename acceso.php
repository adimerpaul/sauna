<?php 
include 'libreria.php';
$con=conexions();
$nombre=$_POST['nombre'];
$clave=$_POST['clave'];
$c=mysql_query("SELECT * FROM personal WHERE nombrei='$nombre' AND clavei='$clave' AND estado='ACTIVO'");
if(mysql_num_rows($c)==1){
	$f=mysql_fetch_array($c);
	$_SESSION['ci']=$f['ci'];
	$_SESSION['nombrei']=$f['nombrei'];
	$_SESSION['tipo']=$f['tipo'];
	header('Location: principal.php');
}else
	header('Location: index.php');

?>