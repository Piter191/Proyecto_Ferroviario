



<?php
include('../funciones/setup.php');
	



//$sql = "INSERT INTO usuario (nombre,rut,tipo_usuario,clave) VALUES ('".$_POST['nombre']."','".$_POST['rut']."','".$_POST['tipo_usuario']."','".$_POST['clave']."')";
$nombre=$_POST["nombre"];
$rut=$_POST["rut"];
$estado=$_POST["estado"];
$telefono=$_POST["telefono"];
$id_trabajador=$_POST["id_trabajador"];



$sql = "UPDATE trabajador SET nombre = '$nombre', rut = '$rut', estado = '$estado', telefono = '$telefono' where id_trabajador=".$id_trabajador;
	mysqli_query(conectar(),$sql);
	header('Location:../Dashboard_Admin.php');


?>