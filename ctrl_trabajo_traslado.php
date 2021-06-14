<?php
include('funciones/setup.php');
	



$sql = "INSERT INTO trabajo_transporte (hora_inicio,hora_termino,id_trabajador,id_tren) VALUES ('".$_POST['hora_inicio']."','".$_POST['hora_termino']."','".$_POST['trabajadores']."','".$_POST['trenes']."')";

	

	mysqli_query(conectar(),$sql);
	//header('Location:formulario.php');
    echo $sql;


?>