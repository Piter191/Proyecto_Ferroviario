<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario Usuario</title>
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
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/iniciar_sesion/main.css">
<!--===============================================================================================-->



</head>
<body>
<form method="POST" action="../controladores/ctrl_usuarios_ingresar.php" >
		<h1>Ingresar Usuario</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		 <center> <label for="email">Nombre</label> </center>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" required>
		</p>
		<p>
		<center>  <label for="password">Rut</label> </center>
		  <input  type="text" placeholder="Ingresa tu rut" name="rut" id="rut" required>
		</p>
        <p>
		<center>  <label for="password">Tipo de Usuario</label> </center>
          <div class="select">
          <select  name="tipo_usuario" id="tipo_usuario">
                                    <option disabled="disabled" selected="selected">Seleccionar</option>
                                    <option>Administrador</option>
                                    <option>Despachador</option>
									<option>Visualizador</option>
                                </select>
                                </div>
		</p>
        <p>
		<center>  <label for="password">Contraseña</label> </center>
          <input type="password" placeholder="Ingresa tu Contraseña" name="clave" id="clave" required>
		</p>
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>	
		</center>

	  </form>
</body>
</html>