<?php
include('../funciones/setup.php');
	



$sql = "INSERT INTO trabajador (nombre,rut,estado,telefono) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['estado']."','$_POST[telefono]')";

	

	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Admin.php');
  


?>