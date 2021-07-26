<?php
include('../funciones/setup.php');

$sql = "INSERT INTO trabajo_mantencion (hora_inicio,hora_termino,id_trabajador,id,estado,fecha_inicio,fecha_termino) VALUES ('".$_POST['hora_inicio']."','".$_POST['hora_termino']."','".$_POST['trabajadores']."','".$_POST['lugar']."','".$_POST['estado']."','".$_POST['fecha_inicio']."','".$_POST['fecha_termino']."')";

	

	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Despachador.php');
	echo $sql;


?>