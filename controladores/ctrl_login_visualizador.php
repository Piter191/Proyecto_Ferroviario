<?php

include("../funciones/setup.php");

//echo $_POST['frmusuario']."-".$_POST['frmclave']

$sql="select * from usuario where rut='".$_POST['frmrut']."' and clave='".$_POST['frmclave']."' and tipo_usuario = 'Visualizador'";
$result=mysqli_query(conectar(),$sql);
$num=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($num!=0)
{
	session_start();
	$_SESSION['user']=$datos['rut'];
	header('Location:../Dashboard_Visualizador.php');
}else{
	header('Location:../iniciar_sesion_visualizador.php?error');
}
?>