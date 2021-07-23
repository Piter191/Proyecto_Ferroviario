<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesión - Visualizador</title>
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
<link rel="icon" href="img/favicon_geotren.ico" type="image/x-icon" />

<script>
	function validar()
	{
		if(document.form1.frmusuario.value=="")
		{
			alert("Debe Ingresar datos al campo Usuario");
			document.form1.frmusuario.focus();
			return false;
		}
		if(document.form1.frmclave.value=="")
		{
			alert("Debe Ingresar la clave");
			document.form1.frmclave.focus();
			return false;
		}
		document.form1.submit();
	}
</script>
</head>
<body>
	<form  action="controladores/ctrl_login_visualizador.php" method="post" name="form1">
		<h1>Iniciar Sesión - Visualizador</h1>
		<center>
		<img src="img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		<center> <label for="email">RUT</label> </center>
		  <input type="text"  id="frmrut" name="frmrut" placeholder="Ingresa tu rut (Formato XXXXXXXX-X)" class="text">
		</p>
		<p>
	<center> <label for="password">CLAVE</label> </center>
		  <input type="password" name="frmclave" id="frmclave" placeholder="Ingrese su clave" class="text" maxlength="8" minlength="6">
		</p>
		<center>
		<input type="submit" name="go" id="go" value="Iniciar Sesión">
		<br> <br>
		
		</center>


        <?php
	    if(isset($_GET['error']))
	    {
	    	?>
	    <h2>Error de Usuario/Clave, vuelva a intentarlo</h2>
	    <?php
		}
		?>
		</div>

	  </form>
</body>
</html>