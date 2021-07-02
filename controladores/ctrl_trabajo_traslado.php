<?php
include('../funciones/setup.php');
	



$sql = "INSERT INTO trabajo_transporte (hora_inicio,hora_termino,id_trabajador) VALUES ('".$_POST['hora_inicio']."','".$_POST['hora_termino']."','".$_POST['trabajadores']."')";

	

	mysqli_query(conectar(),$sql);
	//header('Location:formulario_trabajo.php');
	echo $sql;


?>