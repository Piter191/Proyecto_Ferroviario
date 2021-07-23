<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingresar Trabajador</title>
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
<form method="POST" action="../controladores/ctrl_trabajadores_ingresar.php" >
		<h1>Ingresar Trabajador</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		 <center> <label for="nombre">Nombre</label> </center>
          <input  type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" onkeypress="return soloLetras(event)" required>
		</p>
		<p>
		<center>  <label for="rut">RUT</label> </center>
		  <input  type="text" placeholder="Ingresa tu rut (Formato XXXXXXXX-X)" name="rut" id="rut" oninput="checkRut(this)" maxlength="11" minlength="10" required>
		</p>
        
    <p>
		<center>  <label for="telefono">Telefono +56 9</label> </center>
          <input type="text" placeholder="Ingresa tu telefono" name="telefono" id="telefono" maxlength="8" minlength="8" onkeypress="return valideKey(event);" required>
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
		<input type="submit" name="go" id="go" value="Ingresar Trabajador">
		<br> <br>
		
		</center>

	  </form>
</body>
<script src="../js/validarRUT.js"></script>
</html>