<?php
include('funciones/setup.php');
	



$sql = "INSERT INTO tren (num_patente,num_vagones) VALUES ('$_POST[num_patente]','$_POST[num_vagones]')";

	

	mysqli_query(conectar(),$sql);
	//header('Location:formulario.php');
    echo $sql;


?>