<?php
include('funciones/setup.php');

$sql = "SELECT
 tabla_lugares.nombre AS nombre_lugar, trabajo_transporte.*, trabajador.nombre AS nombre_trabajador, tabla_lugares.id_sector AS nombre_sector
FROM trabajo_transporte
INNER JOIN
  tabla_lugares ON tabla_lugares.id = trabajo_transporte.id
 INNER JOIN
  trabajador ON trabajador.id_trabajador = trabajo_transporte.id_trabajador";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(

        'id_trabajo_transporte' => $datos['id_trabajo_transporte'],
        'hora_inicio' => $datos['hora_inicio'],
        'hora_termino' => $datos['hora_termino'],
        'nombre_trabajador' => $datos['nombre_trabajador'],
        'nombre_lugar' => $datos['nombre_lugar'],
        'nombre_sector' => $datos['nombre_sector'],
        'fecha_inicio' => $datos['fecha_inicio'],
        'fecha_termino' => $datos['fecha_termino'],

    
        
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>