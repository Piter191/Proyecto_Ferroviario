<?php
include('funciones/setup.php');
	
$id_usuario=$_GET["id_usuario"];



$sql = "DELETE from usuario where id_usuario=".$id_usuario;
	mysqli_query(conectar(),$sql);
	header('Location:Dashboard_Admin.php');


?>