<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario Trabajador</title>
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
<?php
include("../funciones/setup.php");
	$id_trabajador=$_GET['id_trabajador'];
	$sql="SELECT * FROM trabajador where id_trabajador='".$id_trabajador."'";
	
	$result=mysqli_query(conectar(),$sql);// EJECUTAMOS LA QUERY

	while($user=mysqli_fetch_array($result))
	{
?>

<script type="text/javascript">
		function valideKey(evt){
			
			// code is the decimal ASCII representation of the pressed key.
			var code = (evt.which) ? evt.which : evt.keyCode;
			
			if(code==8) { // backspace.
			  return true;
			} else if(code>=48 && code<=57) { // is a number.
			  return true;
			} else{ // other keys.
			  return false;
			}
		}
		</script>


</head>
<body>
<form method="POST" action="../controladores/ctrl_trabajadores_modificar.php" >
		<h1>Modificar Trabajador</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<input type="text" style="display: none;" name="id_trabajador" value="<?php echo $_GET['id_trabajador'] ?>">
		<p>
		<center>  <label for="nombre">Nombre</label> </center>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" value="<?php echo $user['nombre'] ?>" required>
		</p>
		<p>
		<center>  <label for="rut">Rut</label> </center>
		  <input  type="text" placeholder="Ingresa tu rut" name="rut" id="rut" value="<?php echo $user['rut'] ?>" required>
		</p>
        <p>
	<center><label for="contraseña">Contraseña</label></center>
          <input type="password" placeholder="Ingresa tu Contraseña" name="clave" id="clave" value="<?php echo $user['clave'] ?>" required>
		</p>
    <p>
	<center><label for="telefono">Telefono +56 9</label></center>
          <input type="text" placeholder="Ingresa tu telefono" name="telefono" id="telefono" maxlength="8" minlength="8" value="<?php echo $user['telefono'] ?>" onkeypress="return valideKey(event);" required>
		</p>
		
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>
		
		</center>

	  </form>
	  <?php } ?>
</body>
</html>