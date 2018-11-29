<?PHP
include("conexion.php");

/*$usua=$_POST['nombre_usuario'];
$pass=$_POST['contrasena'];
$con=conectar();


$consu="SELECT * FROM administrador WHERE nombre_usuario='$usua' AND contrasena ='$pass'";

$resultado=mysqli_query($con, $consu);
$filas= mysqli_num_rows($resultado);
if($filas>0)
{
	 session_start();
	 $_SESSION['nombre_usuario']=$usua;
	 header("Location:index.php");
}
else
{
	session_start(); 
	$_SESSION['alerta']="Verifique usuario";
	header("Location:index.php");

}
mysqli_free_result($resultado);
mysqli_close($con);
*/


if(!empty($_POST)){
	if(isset($_POST["usuario"]) &&isset($_POST["contra"])){
		if($_POST["usuario"]!=""&&$_POST["contra"]!=""){
			include "conexion.php";
			
			$sql1= "select * from administrador where (nombre_usuario=\"$_POST[usuario]\") and contrasena=\"$_POST[contra]\" ";
			$query = $con->query($sql1);
			
				session_start();
				$_SESSION["nombre_usuario"]=$sql1;
				header("location:index.php");
				
		}
	}
}
?>

