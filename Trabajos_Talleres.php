<!DOCTYPE html>
<html lang="en">

<head>
	<?php

	include('funciones/setup.php');

	?>
	<title>Trabajos en la Sector de los Talleres</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon_geotren.ico" type="image/x-icon" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/tablas_mapa.css" />
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="icon" href="img/favicon_geotren.ico" type="image/x-icon" />
</head>

<body>
	<center>
	<div class="container">
		<h1 id="Titulo_Tablas_Mapa">>Trabajos de Talleres </h1> <br> <br>
		<table class="table table-condensed table-bordered table-hover" id="customers">
			<thead>
				<tr>
					<th class="th-sm table-danger">Fecha de inicio</th>
					<th class="th-sm table-danger">Hora Inicio</th>
					<th class="th-sm table-danger">Fecha Termino</th>
					<th class="th-sm table-danger">Hora de Termino</th>
					<th class="th-sm table-danger">Nombre Lugar</th>
					<th class="th-sm table-danger">Nombre Sector</th>
					<th class="th-sm table-danger">Trabajador</th>
					<th class="th-sm table-danger">Estado</th>
				</tr>
			</thead>
			<?php
			$sql = "SELECT
	    tabla_lugares.nombre AS nombre_lugar, trabajo_mantencion.*, trabajador.nombre AS nombre_trabajador, tabla_lugares.id_sector AS nombre_sector
        FROM trabajo_mantencion
        INNER JOIN
	    tabla_lugares ON tabla_lugares.id = trabajo_mantencion.id
	    INNER JOIN
	    trabajador ON trabajador.id_trabajador = trabajo_mantencion.id_trabajador
	    WHERE trabajo_mantencion.estado = 'En Progreso' and tabla_lugares.id_sector = 'Talleres'";
			$result = mysqli_query(conectar(), $sql);
			while ($mostrar = mysqli_fetch_array($result)) {
			?>
				<tr>
					<td><?php echo $mostrar['fecha_inicio'] ?>
					<td><?php echo $mostrar['hora_inicio'] ?>
					<td><?php echo $mostrar['fecha_termino'] ?>
					<td><?php echo $mostrar['hora_termino'] ?></td>
					<td><?php echo $mostrar['nombre_lugar'] ?></td>
					<td><?php echo $mostrar['nombre_sector'] ?></td>
					<td><?php echo $mostrar['nombre_trabajador'] ?></td>
					<td><?php echo $mostrar['estado'] ?></td>
				</tr>
			<?php
			}
			?>
		</table>
		<input id="Boton_Volver" type="button" value="Volver" onClick="history.go(-1);">
		</div>
</body>

</html>