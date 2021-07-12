<?php
include('../funciones/setup.php');	
if ( valida_rut($_POST['rut']) )
{
	$sql = "INSERT INTO usuario (nombre,rut,tipo_usuario,clave,estado) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['tipo_usuario']."','".$_POST['clave']."','".$_POST['estado']."')";
	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Admin.php');
}
else
{
	header('Location:../index.php');
}

?>