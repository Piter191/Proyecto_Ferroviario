<?php
include('funciones/setup.php');
	



$sql = "INSERT INTO trabajador (nombre,rut,clave,telefono,rol) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['clave']."','$_POST[telefono]','".$_POST['rol']."')";

	

	mysqli_query(conectar(),$sql);
	//header('Location:formulario.php');
    echo $sql;


?>