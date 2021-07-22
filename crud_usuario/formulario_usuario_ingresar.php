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
<link rel="icon" href="img/favicon_geotren.ico" type="image/x-icon" />
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
		<center>  <label for="password">Rut </label> </center>
		
		  <input  type="text" placeholder="Ingresa tu rut (Formato XXXXXXXX-X)" name="rut" id="rut" oninput="checkRut(this)" maxlength="11" minlength="10" required>
		</p>
        <p>
		<center>  <label for="password">Tipo de Usuario</label> </center>
          <div class="select">
          <select  name="tipo_usuario" id="tipo_usuario" required>
                                    <option value="">Seleccionar</option>
                                    <option>Administrador</option>
                                    <option>Despachador</option>
									<option>Visualizador</option>
                                </select>
                                </div>
		</p>
        <p>
		<center>  <label for="password">Contraseña</label> </center>
          <input type="password" placeholder="Ingresa tu Contraseña" name="clave" id="clave" maxlength="8" minlength="6" required>
		</p>
		<p>
		<center>  <label for="password">Estado</label> </center>
          <div class="select">
          <select  name="estado" id="estado" required>
                                    <option  value="">Seleccionar</option>
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                </select>
                                </div>
		</p> <br>
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>	
		</center>

	  </form>
</body>
<script src="../js/validarRUT.js"></script>
</html>