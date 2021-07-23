<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificar Usuario</title>
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
<link rel="icon" href="../img/favicon_geotren.ico" type="image/x-icon" />
<?php
include("../funciones/setup.php");
	$id_usuario=$_GET['id_usuario'];
	$sql="SELECT * FROM usuario where id_usuario='".$id_usuario."'";
	
	$result=mysqli_query(conectar(),$sql);// EJECUTAMOS LA QUERY

	while($user=mysqli_fetch_array($result))
	{
?>
<script>
  function soloLetras(e) {
      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = [8, 37, 39, 46];
  
      tecla_especial = false
      for(var i in especiales) {
          if(key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }
  
      if(letras.indexOf(tecla) == -1 && !tecla_especial)
          return false;
  }
  
  function limpia() {
      var val = document.getElementById("miInput").value;
      var tam = val.length;
      for(i = 0; i < tam; i++) {
          if(!isNaN(val[i]))
              document.getElementById("miInput").value = '';
      }
  }
  </script>



</head>
<body>
<form method="POST" action="../controladores/ctrl_usuarios_modificar.php" >
		<h1>Modificar Usuario</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<input type="text" style="display: none;" name="id_usuario" value="<?php echo $_GET['id_usuario'] ?>">
		<p>
		<center>  <label for="email">Nombre</label> </center>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" value="<?php echo $user['nombre'] ?>"  onkeypress="return soloLetras(event)" required>
		</p>
		<p>
		<center>  <label for="password">RUT</label> </center>
		  <input  type="text" placeholder="Ingresa tu rut (Formato XXXXXXXX-X)" name="rut" id="rut" value="<?php echo $user['rut'] ?>" oninput="checkRut(this)" maxlength="11" minlength="10" required>
		</p>
        <p>
	<center> <label for="password">Tipo de Usuario</label> </center>
          <div class="select">
          <select  name="tipo_usuario" id="tipo_usuario">
			<?php if($user['tipo_usuario'] == 'Administrador'){?>

				<option selected>Administrador</option>
				<option >Despachador</option>
				<option>Visualizador</option>
			<?php } ?>

			<?php if($user['tipo_usuario'] == 'Despachador'){?>

				<option>Administrador</option>
				<option selected>Despachador</option>
				<option>Visualizador</option>
			<?php } ?>
			
			<?php if($user['tipo_usuario'] == 'Visualizador'){?>

				<option>Administrador</option>
				<option>Despachador</option>
				<option selected>Visualizador</option>
			<?php } ?>
		</select>
		</div>
		</p>
        <p>
		<center>  <label for="password">Contraseña</label> </center>
          <input type="password" placeholder="Ingresa tu Contraseña (6 - 8 Caracteres)"name="clave" id="clave" value="<?php echo $user['clave'] ?>" required>
		</p>
		<p>
		<center>  <label for="password">Estado</label> </center>
          <div class="select">
        <select  name="estado" id="estado">

		<?php if($user['estado'] == 'Activo'){?>
			<option selected>Activo</option>
			<option>Inactivo</option>
		<?php } ?>

		<?php if($user['estado'] == 'Inactivo'){?>
			<option>Activo</option>
			<option selected>Inactivo</option>
		<?php } ?>
		
		</select>
		<br> <br>
		</div>
		</p>
		<center>
		<input type="submit" name="go" id="go" value="Modificar Usuario">
		<br> <br>
		
		</center>

	  </form>
	  <?php } ?>
</body>
<script src="../js/validarRUT.js"></script>
</html>