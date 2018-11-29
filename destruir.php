
<?php
session_start();

if(isset($_SESSION['nombre_usuario']))
{
	unset($_SESSION['nombre_usuario']);
	session_destroy($_SESSION['nombre_usuario']);
	
	header('location:hotel.php');	
}
else
{
	echo"no se cerro la sesion";
	
}
?>