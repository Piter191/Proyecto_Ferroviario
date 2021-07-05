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


<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>


</head>
<body>
<form method="POST" action="../controladores/ctrl_trabajo_ingresar_admin.php" >
		<h1>Crear Orden de Trabajo</h1>
		<center>
		<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
	</center>
		<div class="inset">
		<p>
		  <label for="hora_inicio">Hora de Inicio</label>
          <input class="input-time"  type="time" name="hora_inicio" id="hora_inicio" required>
		</p>
		<p>
		  <label for="hora_termino">Hora de Termino</label>
		  <input  type="time" name="hora_termino" id="hora_termino" required>
		</p>
        <p>
		  <label for="password">Trabajador</label> 
		  <div class="select" id="trabajadores" name="trabajadores"> 
         </div>
		</p>
		<p>
		  <label for="password">Sector</label> 
		  <select id="lista1" name="lista">
		<option value="0">Seleccione una opcion</option>
		<option value="1">Linea 3 </option>
		<option value="2">Interior Mina Granito </option>
		<option value="3">Portal Tunel </option>
		<option value="4">Puente de Vaciado</option>
		<option value="5">Talleres</option>
		  </select>
		<br>
		<div id="select2lista"></div>
         </div>
		</p>

		<br>
       
		<center>
		<input type="submit" name="go" id="go" value="Registrar">
		<br> <br>
		
		</center>

	  </form>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='formulario_trabajo.js'></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"id_sector=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>