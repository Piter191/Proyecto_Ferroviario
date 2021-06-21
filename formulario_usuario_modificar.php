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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/iniciar_sesion/main.css">
<!--===============================================================================================-->
<?php
include("funciones/setup.php");
	$id_usuario=$_GET['id_usuario'];
	$sql="SELECT * FROM usuario where id_usuario='".$id_usuario."'";
	
	$result=mysqli_query(conectar(),$sql);// EJECUTAMOS LA QUERY

	while($user=mysqli_fetch_array($result))
	{
?>



</head>
<body>
<form method="POST" action="ctrl_usuarios_modificar.php" >
		<h1>Crear Usuario</h1>
		<center>
		<img src="img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<input type="text" style="display: none;" name="id_usuario" value="<?php echo $_GET['id_usuario'] ?>">
		<p>
		  <label for="email">Nombre Completo</label>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" value="<?php echo $user['nombre'] ?>" required>
		</p>
		<p>
		  <label for="password">Rut</label>
		  <input  type="text" placeholder="Ingresa tu rut" name="rut" id="rut" value="<?php echo $user['rut'] ?>" required>
		</p>
        <p>
		  <label for="password">Tipo de Usuario</label>
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
		  <label for="password">Contraseña</label>
          <input type="password" placeholder="Ingresa tu Contraseña" name="clave" id="clave" value="<?php echo $user['clave'] ?>" required>
		</p>
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>
		
		</center>

	  </form>
	  <?php } ?>
</body>
</html>