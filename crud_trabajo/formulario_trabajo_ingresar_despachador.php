<!DOCTYPE html>
<html lang="en">

<head>
	<title>Formulario Usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/train.ico" />
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

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


</head>

<body>
	<form method="POST" action="../controladores/ctrl_trabajo_ingresar_despachador.php">
		<h1>Ingresar Orden de Trabajo</h1>
		<center>
			<img src="../img/Logo_GEOTREN.png" width="120px" height="100px">
		</center>
		<div class="inset">
		<p>
				<center> <label for="fecha_inicio">Fecha de Inicio</label>
					<input class="input-time" type="date" name="fecha_inicio" id="fecha_inicio" required>
				</center>
			</p>
			<p>
				<center> <label for="hora_inicio">Hora de Inicio</label>
					<input class="input-time" type="time" name="hora_inicio" id="hora_inicio" required>
				</center>
			</p>
			<p>
				<center> <label for="fecha_termino">Fecha de Termino</label>
					<input class="input-time" type="date" name="fecha_termino" id="fecha_termino" required>
				</center>
			</p>
			<p>
				<center> <label for="hora_termino">Hora de Termino</label>
						<input type="time" name="hora_termino" id="hora_termino" required>
				</center>
			</p>
			<p>
				<center> <label for="password">Trabajador</label> </center>
			<div class="select" id="trabajadores" name="trabajadores">
			</div>
			</p>
			<p>
				<center> <label for="password">Sector</label> </center>
				<select id="lista1" name="lista">
					<option disabled value="0">Seleccione una opcion</option>
					<option selected value="Linea 3">Linea 3 </option>
					<option value="Interior Mina Granito">Interior Mina Granito </option>
					<option value="Portal Tunel">Portal Tunel </option>
					<option value="Puente de Vaciado">Puente de Vaciado</option>
					<option value="Talleres">Talleres</option>
				</select>
				<br>
			<div id="select2lista"></div>
		</div>
		</p>
		<center> <label for="password">Estado</label> </center>
		<div class="select">
			<select name="estado" id="estado">
				<option disabled="disabled" selected="selected">Seleccionar</option>
				<option>Iniciado</option>
				<option>En Progreso</option>
				<option>Terminado</option>
				<option>Suspendido</option>
				<option>Interrumpido</option>
			</select>
		</div>
		</p> <br>
		<br>
		<center>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Ver Mapa
			</button>

			<!--Bootstrap modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<!-- Modal heading -->
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Mapa Mina
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									×
								</span>
							</button>
						</div>
						<!-- Modal body with image -->
						<div class="modal-body">
							<img src="../img/Mapa_Mina2.0.jpg" style="max-width:100%;height:auto;" />
						</div>
					</div>
				</div>
			</div>
			<br>
		<center>
			<input type="submit" name="go" id="go" value="Registrar">
			<br> <br>

		</center>

	</form>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='formulario_trabajo.js'></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function() {
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista() {
		$.ajax({
			type: "POST",
			url: "datos.php",
			data: "id_sector=" + $('#lista1').val(),
			success: function(r) {
				$('#select2lista').html(r);
			}
		});
	}
</script>