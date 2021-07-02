<?php
include('../funciones/setup.php');
	



$sql = "INSERT INTO trabajador (nombre,rut,clave,telefono) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['clave']."','$_POST[telefono]')";

	

	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Admin.php');
  


?>