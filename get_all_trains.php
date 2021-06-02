<?php
include('funciones/setup.php');

$sql = "SELECT * FROM tren";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(
        'num_vagones' => $datos['num_vagones'],
        'num_patente' => $datos['num_patente'],
        'id_tren' => $datos['id_tren'],
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>