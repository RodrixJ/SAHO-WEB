
<?php
/*
session_start();

if(isset($_SESSION['nombre_usuario']))
{
	unset($_SESSION['nombre_usuario']);
	session_destroy($_SESSION['nombre_usuario']);
	
	header('location:login.php');	
}
else
{
	echo"no se cerro la sesion";
	
}*/

session_start();
session_destroy();
print "<script>window.location='../login.php';</script>"


?>