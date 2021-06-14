<?php
include('funciones/setup.php');

$sql = "SELECT * FROM trabajo_transporte";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(

        'id_trabajo_transporte' => $datos['id_trabajo_transporte'],
        'hora_inicio' => $datos['hora_inicio'],
        'hora_termino' => $datos['hora_termino'],
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>