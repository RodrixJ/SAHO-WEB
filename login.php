	
<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estiloslogin.css">
</head>
<body>
	<div class="container">


		<div class="row">
			<img src="imagenes/hotel.png" alt="">
		</div>

	<form role="form" action="iniciosesion.php" method="post"  >

	  <div class="form-group">
	  	<!--<?php 

		//if (isset($_SESSION['alerta']) ){ 
		//		echo "<label >Verifique los datos</label>.<br />";
				
		//	}
		?>-->
	  	 
	    <label for="username">Usuario</label>
	    <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" name="username">
	  </div>

	  <div class="form-group">
	    <label for="password">Contraseña</label>
	    <input type="password" class="form-control" id="password" placeholder="PassWord" name="password">
	  </div>

     <button type="submit" class="btn btn-primary">Entrar</button>
   </form>


	</div>
</body>

<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</html>

