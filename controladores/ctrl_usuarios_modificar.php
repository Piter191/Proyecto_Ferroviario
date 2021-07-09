<?php
include('../funciones/setup.php');
	



//$sql = "INSERT INTO usuario (nombre,rut,tipo_usuario,clave) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['tipo_usuario']."','".$_POST['clave']."')";
$nombre=$_POST["nombre"];
$rut=$_POST["rut"];
$tipo_usuario=$_POST["tipo_usuario"];
$clave=$_POST["clave"];
$estado=$_POST["estado"];
$id_usuario=$_POST["id_usuario"];



$sql = "UPDATE usuario SET nombre = '$nombre', rut = '$rut', tipo_usuario = '$tipo_usuario', clave = '$clave', estado = '$estado' where id_usuario=".$id_usuario;
	mysqli_query(conectar(),$sql);
	//header('Location:../Dashboard_Admin.php');

echo $sql;
?>