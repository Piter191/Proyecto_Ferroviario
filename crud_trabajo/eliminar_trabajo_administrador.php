<?php
include('funciones/setup.php');
	
$id_trabajo_transporte=$_GET["id_trabajo_transporte"];



$sql = "DELETE from trabajo_transporte where id_trabajo_transporte=".$id_trabajo_transporte;
	mysqli_query(conectar(),$sql);
	header('Location:Dashboard_Admin.php');


?>