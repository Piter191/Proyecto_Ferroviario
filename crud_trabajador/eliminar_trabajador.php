<?php
include('../funciones/setup.php');
	
$id_trabajador=$_GET["id_trabajador"];



$sql = "DELETE from trabajador where id_trabajador=".$id_trabajador;
	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Admin.php');


?>