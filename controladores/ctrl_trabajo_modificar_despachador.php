



<?php
include('../funciones/setup.php');
	



//$sql = "INSERT INTO usuario (nombre,rut,tipo_usuario,clave) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['tipo_usuario']."','".$_POST['clave']."')";
$id_trabajo_transporte=$_POST["id_trabajo_transporte"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_termino=$_POST["fecha_termino"];
$hora_inicio=$_POST["hora_inicio"];
$hora_termino=$_POST["hora_termino"];
$estado=$_POST["estado"];
$trabajador=$_POST["trabajadores"];
$lugar=$_POST["lugar"];




$sql = "UPDATE trabajo_transporte SET hora_inicio = '$hora_inicio', hora_termino = '$hora_termino', fecha_inicio = '$fecha_inicio', fecha_termino = '$fecha_termino', estado = '$estado', id_trabajador = '$trabajador', id = '$lugar' where id_trabajo_transporte=".$id_trabajo_transporte;
	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Despachador.php');
	


?>