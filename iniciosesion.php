<?php
echo "gñkaslksaas{kdñlaskdñla";
if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "php/conexion.php";
			
			$user_id=null;
			$sql1= "select * from administrador where nombre_usuario=\"$_POST[username]\" and contrasena=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["nombre_usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='iniciosesion.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
                print "<script>window.location='index.php';</script>";
				//print "<script>window.location='../home.php';</script>";			
			}
		}
	}
}
?>
