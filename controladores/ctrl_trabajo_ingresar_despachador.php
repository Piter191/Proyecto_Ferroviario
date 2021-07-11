<?php
include('../funciones/setup.php');
	
$sql1 = "SELECT trabajo_transporte.* FROM trabajo_transporte INNER JOIN trabajador ON trabajador.id_trabajador = trabajo_transporte.id_trabajador";
$sql2 = "SELECT trabajo_transporte.* FROM trabajo_transporte INNER JOIN tabla_lugares ON tabla_lugares.id = trabajo_transporte.id";

$sql = "INSERT INTO trabajo_transporte (hora_inicio,hora_termino,id_trabajador,id,estado,fecha_inicio,fecha_termino) VALUES ('".$_POST['hora_inicio']."','".$_POST['hora_termino']."','".$_POST['trabajadores']."','".$_POST['lugar']."','".$_POST['estado']."','".$_POST['fecha_inicio']."','".$_POST['fecha_termino']."')";

	

	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Despachador.php');
	echo $sql;


?>