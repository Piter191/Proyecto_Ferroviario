<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario Tren</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/train.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/iniciar_sesion/main.css">
<!--===============================================================================================-->



</head>
<body>
<form method="POST" action="ctrl_trenes.php" >
		<h1>Crear Tren</h1>
		<center>
		<img src="img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		  <label for="numero_patente">Numero de patente</label>
          <input  type="text" placeholder="Ingresa el numero de patente" name="num_patente" id="num_patente" required>
		</p>
		<p>
		  <label for="numero_vagones">Numero de vagones</label>
		  <input  type="text" placeholder="Ingresa el numero de vagones" name="num_vagones" id="num_vagones" required>
		</p>
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>
		
		</center>

	  </form>
</body>
</html>