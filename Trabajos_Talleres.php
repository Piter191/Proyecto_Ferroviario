<!DOCTYPE html>
<html lang="en">

<head>
	<title>Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<table class="table table-striped">

		<thead>
			<tr>
				<th class="th-sm table-danger">Fecha de inicio</th>
				<th class="th-sm table-danger">Fecha de termino</th>
				<th class="th-sm table-danger">Trabajador</th>
				<th class="th-sm table-danger">Lugar</th>
				<th class="th-sm table-danger">Sector</th>
			</tr>
		</thead>
		<?php

		$sql = "SELECT comunas.nombre_comunas, usuarios.* FROM comunas INNER JOIN usuarios ON usuarios.id_comunas = comunas.id_comunas";
		$result = mysqli_query(conectar(), $sql); // EJECUTAMOS LA QUERY
		while ($dato = mysqli_fetch_array($result)) {

		?>
			?>
			<tr>
				<td><?php echo $dato['Fecha_Inicio'] // aca te faltaba poner los echo para que se muestre el valor de la variable.
					?></td>
				<td><?php echo $dato['Fecha_Termino'] ?></td>
				<td><?php echo $dato['Trabajador'] ?></td>
				<td><?php echo $dato['Lugar'] ?></td>
				<td><?php echo $dato['Sector'] ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>