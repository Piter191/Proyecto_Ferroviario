<?php
include('funciones/setup.php');
	



$sql = "INSERT INTO usuario (nombre,rut,tipo_usuario,clave) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['tipo_usuario']."','".$_POST['clave']."')";

	

	mysqli_query(conectar(),$sql);
	//header('Location:formulario.php');
    echo $sql;


?>