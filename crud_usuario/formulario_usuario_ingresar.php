<?php
session_start();

if(isset($_SESSION['user']))
{
    include('../funciones/setup.php');


    if(isset($_GET['idusu']))
    {
        $sqlusu="select * from usuario where id_usuario=".$_GET['idusu'];
        $resultusu=mysqli_query(conectar(),$sqlusu);
        $datosusu=mysqli_fetch_array($resultusu);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingresar Usuario</title>
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<form method="POST" action="../controladores/ctrl_usuarios_ingresar.php" >
		<h1>Ingresar Usuario</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		 <center> <label for="email">Nombre</label> </center>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" onkeypress="return soloLetras(event)" required>
		</p>
		<p>
		<center>  <label for="password">RUT </label> </center>
		
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
          <input type="password" placeholder="Ingresa tu Contraseña (6 - 8 Caracteres)" name="clave" id="clave" maxlength="8" minlength="6" required>
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
        <input type="submit" name="go" id="go" value="Ingresar Usuario"> <br><br>
        <a href="../Dashboard_Admin.php"><button   type="button" class="btn-white" style="height:30px;width:150px">  Volver </button> </a> 
		<br> <br>	
		</center>

	  </form>
</body>
<script src="../js/validarRUT.js"></script>
</html>
<?php
}else{
    header('Location:../acceso_denegado.php');
}
?>