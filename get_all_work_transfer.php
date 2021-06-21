<?php
include('funciones/setup.php');

$sql = "SELECT trabajo_transporte.*, trabajador.nombre AS nombre_trabajador FROM trabajo_transporte INNER JOIN trabajador ON trabajador.id_trabajador = trabajo_transporte.id_trabajador";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(

        'id_trabajo_transporte' => $datos['id_trabajo_transporte'],
        'hora_inicio' => $datos['hora_inicio'],
        'hora_termino' => $datos['hora_termino'],
        'nombre_trabajador' => $datos['nombre_trabajador'],
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>