<?php
include('../funciones/setup.php');
	
$id_trabajo_mantencion=$_GET["id_trabajo_mantencion"];



$sql = "DELETE from trabajo_mantencion where id_trabajo_mantencion=".$id_trabajo_mantencion;
	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Despachador.php');


?>