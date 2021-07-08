<?php
include('../funciones/setup.php');


 
$sql="SELECT id,
id_sector,
nombre 
from tabla_lugares 
where id_sector='$_POST[id_sector]'";

$result=mysqli_query(conectar(),$sql);

$cadena="<center><label>Lugar</label> </center> 
			<select id='lista2' name='lugar'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";


?>